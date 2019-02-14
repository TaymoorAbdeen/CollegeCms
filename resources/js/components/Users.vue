<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Users Table</h3>
            <div class="card-tools">
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                @click="newModal()"
              >
                New User
                <i class="fas fa-user-plus fa-fw"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Registered</th>
                  <th>Modify</th>
                </tr>
                <tr v-for="user in users" :key="user.id">
                  <td>{{user.id}}</td>
                  <td>{{user.name| upText}}</td>
                  <td>{{user.email}}</td>
                  <td>{{user.type}}</td>
                  <td>{{user.created_at| dateOnly}}</td>
                  <td>
                    <a href="#" @click="editUser(user)">
                      <i class="fa fa-edit"></i>
                    </a>
                    &nbsp; / &nbsp;
                    <a href="#" @click="deleteUser(user.id)">
                      <i class="fa fa-trash red"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 v-show="editMode" class="modal-title" id="addNewTitle">Edit User</h5>
            <h5 v-show="!editMode" class="modal-title" id="addNewTitle">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent=" editMode ? updateUser() : createUser()">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Enter Name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                >
                <has-error :form="form" field="name"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.email"
                  type="email"
                  name="email"
                  placeholder="Enter Email"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                >
                <has-error :form="form" field="email"></has-error>
              </div>

              <div class="form-group">
                <textarea
                  v-model="form.bio"
                  name="bio"
                  id="bio"
                  placeholder="Type bio for you (optional)"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('bio') }"
                ></textarea>
                <has-error :form="form" field="bio"></has-error>
              </div>

              <div class="form-group">
                <select
                  v-model="form.type"
                  type="text"
                  id="type"
                  name="type"
                  placeholder="Enter type"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('type') }"
                >
                  <option value>Select User Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard User</option>
                  <option value="author">Author</option>
                </select>
                <has-error :form="form" field="type"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.password"
                  type="password"
                  name="password"
                  placeholder="Enter Password"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('password') }"
                >
                <has-error :form="form" field="password"></has-error>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
              <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editMode: true,
      users: {},
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        type: "",
        bio: "",
        photo: ""
      })
    };
  },
  methods: {

    updateUser() {
      this.$Progress.start();
      this.form.put('/api/user/' + this.form.id)
      .then(() => {
        $("#addNew").modal('hide');
        swal.fire (
          'Update',
          'User info has updated',
          'success'
        )
        this.$Progress.finish();
        Fire.$emit("afterEvent");
      })
      .catch(()=> {
        this.$Progress.fail();
      });
    },

    editUser(user) {
      this.editMode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(user);
    },

      newModal() {
      this.editMode = false ;
      this.form.reset();
      $("#addNew").modal("show");
    },

    deleteUser(id) {
      swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {

  if (result.value) {
              // send request to the server
              this.form.delete('/api/user/' + id).then(()=>{
                // if send success
                Fire.$emit("afterEvent");

                swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }).catch(()=> {
                // if any error
                swal.fire({
                  title: 'Failed !!!',
                  text: "there many error",
                  type: 'warning',
                })
              })
        }

      })
    },

    loadUsers() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },
    createUser() {
      this.$Progress.start();
      this.form
        .post("api/user")

        .then(() => {
          $("#addNew").modal("hide");

          Fire.$emit("afterEvent");

          toast.fire({
            type: "success",
            title: "User created successfully"
          });

          this.$Progress.finish();
        })

        .catch(() => {});
    }
  },
  created() {
    this.loadUsers();

    // first method
    // setInterval( () => this.loadUsers(), 3000);

    // second method
    Fire.$on("afterEvent", () => {
      this.loadUsers();
    });
  }
};
</script>
