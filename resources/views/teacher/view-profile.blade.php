 
 
<div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{URL::asset('img/profile.png')}}" alt="User profile picture">
          </div>
           <h3 class="profile-username text-center">{{$teacher->name}}</h3>

          <p class="text-muted text-center">Software Engineer</p>

          <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{$teacher->email}}</a>
                </li>

            <li class="list-group-item">
              <b>Birthdate</b> <a class="float-right">{{$teacher->birthdate}}</a>
            </li>
            <li class="list-group-item">
                    <b>Graduated at</b> <a class="float-right">{{$teacher->graduated_at}}</a>
                  </li>
            <li class="list-group-item">
              <b>Bio</b> <a class="float-right">{{$teacher->bio}}</a>
            </li>
            <li class="list-group-item">
              <b>College</b> <a class="float-right">{{$college->name}}</a>
            </li>
            <li class="list-group-item">
                    <b>Department</b> <a class="float-right">{{$department->name}}</a>
                  </li>
                  <li class="list-group-item">
                        <b>Teaching</b> <a class="float-right">{{$teaches}}</a>
                      </li>
                     
          </ul>
        
         </div>
        <!-- /.card-body -->
      </div>
    
 
  