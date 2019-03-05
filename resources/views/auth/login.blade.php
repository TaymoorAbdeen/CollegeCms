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
  
  <title>Login or Register</title>
  <link rel="stylesheet" href="/css/app.css">
 <style>
  body{
    background-color: #cae5ff !important;
  }
 </style>
</head>

<body class="hold-transition register-page">
     <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Kirkuk</b>CMS</a>
        <img src="{{URL::asset('img/logo.png')}}" alt="">
      </div>

      {{-- @if ($errors->any())
      <div class="notification is-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif --}}

      @if (Session::has('message'))

    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fa fa-ban"></i> Alert!</h5>
    {{session()->get('message')}}  </div>
 
       @endif
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
              <div class="mb-3">
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
                <div class="mb-3">
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
