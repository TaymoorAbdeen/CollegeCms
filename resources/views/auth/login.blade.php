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
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div>
    
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">If you are already  a user </p>
    
          <form  method="POST" action="/">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
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
          
           
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
         </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>


    <div class="register-box">
       
      
        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">If new enter the id given to you </p>
      
            <form  method="POST" action="/">
              {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="text" name="id" class="form-control" placeholder="Enter id">
                <div class="input-group-append">
                    <span class="fas fa-keyboard input-group-text"></span>
                </div>
              </div>
               
            
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
           </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
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
