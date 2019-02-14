 


<!DOCTYPE html>
<!--
This is a starter template page   this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
 

  <title>AdminLTE 3 | Starter</title>
  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition register-page">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Student Register </p>
          <form method="POST" action="/regst" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Full name">
              <div class="input-group-append">
                  <span class="fa fa-user input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                  <span class="fa fa-envelope input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                  <span class="fa fa-lock input-group-text"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                  <span class="fa fa-lock input-group-text"></span>
              </div>
            </div>

          
              
            <div class="input-group mb-3">
                    <input type="date" name="birthdate" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                  </div>
    

     

              <div class="form-group">
                <label>Stage</label>
                <select name="stage" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                      <option>male</option>
                      <option>female</option>
                    
                    </select>
                  </div>
    

              <div class="form-group">
                    <div class="custom-file">
                      <input type="file" name="profile_picture" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose profile picture</label>
                    </div>
                  </div>

                  <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" name="bio" rows="3" placeholder="Enter ..."></textarea>
                      </div>

            <div class="row">
              <div class="col-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>
              <!-- /.col -->
            </div>
</form>
         
           

   
<script src="/js/app.js"></script>
<script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
        increaseArea : '20%' // optional
      })
    })
  </script>

</body>
</html>
