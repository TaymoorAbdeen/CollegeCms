 
 
<div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
 
            <img class="profile-user-img img-fluid img-circle" src="{{URL::asset('uploads/images/profile_pictures')}}{{'/'.session()->get('profile_picture')}}" alt="User profile picture">
          </div>
           <h3 class="profile-username text-center">{{$admin->name}}</h3>

          <p class="text-muted text-center">Admin</p>

          <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{$admin->email}}</a>
                </li>
 
    
          
            <li class="list-group-item">
              <b>Admin in College:</b> <a class="float-right">{{$college->name}}</a>
            </li>
            <li class="list-group-item">
                    <b>In charge of department:</b> <a class="float-right">{{$department->name}}</a>
                  </li>
                  
          </ul>
        
         </div>
        <!-- /.card-body -->
      </div>
    
 
  