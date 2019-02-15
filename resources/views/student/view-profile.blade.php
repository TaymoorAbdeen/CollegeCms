 
 
<div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{URL::asset('img/profile.png')}}" alt="User profile picture">
          </div>
 
          <h3 class="profile-username text-center">{{$student->name}}</h3>

          <p class="text-muted text-center">Software Engineer</p>

          <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{$student->email}}</a>
                </li>

            <li class="list-group-item">
              <b>Birthdate</b> <a class="float-right">{{$student->birthdate}}</a>
            </li>
            <li class="list-group-item">
              <b>Bio</b> <a class="float-right">{{$student->bio}}</a>
            </li>
            <li class="list-group-item">
              <b>College</b> <a class="float-right">{{$college->name}}</a>
            </li>
            <li class="list-group-item">
                    <b>Department</b> <a class="float-right">{{$department->name}}</a>
                  </li>
                  <li class="list-group-item">
                        <b>Stage</b> <a class="float-right">{{$student->stage}}</a>
                      </li>
          </ul>
        
         </div>
        <!-- /.card-body -->
      </div>
    
 
  