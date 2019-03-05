
<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
 
<style>
a{
  font-size: 1.2em;
}
</style>
  <title>College content management system </title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/main" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact-us" class="nav-link">Contact Us</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{URL::asset('img/logo.png')}}" alt="kirkuk Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kirkuk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img class="  img-fluid img-circle" src="{{URL::asset('uploads/images/profile_pictures')}}{{'/'.session()->get('profile_picture')}}" alt="User profile picture">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{session()->get('user_name')}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               
              <li class="nav-item has-treeview">
                @if (session()->get('user')=='admin')
                <a class="nav-link nav-click" href="/dashboard">
                  <i class="fas fa-tachometer-alt blue"></i>

                  <p>
                     Dashboard
                  </p>
                </a>    
                @endif 
              </li>

               <li class="nav-item has-treeview">

                  @if (session()->get('user')=='admin')
                  <a class="nav-link nav-click" href="/edit-marks-s-lecture">
                    <i class="fas fa-marker yellow"></i>

                    <p>
                       Post or Edit Marks
                    </p>
                  </a>    
                  @endif
                  @if (session()->get('user')=='teacher')
                  <a class="nav-link nav-click" href="/create-lecture">
                    <i class="fas fa-book-open blue"></i>

                    <p>
                        Post Lecture
                    </p>
                   </a>
                  @endif

             @if (session()->get('user')=='student')
  
                   <a class="nav-link nav-click" href="/select-lecture-st">
                   <i class="fas fa-tachometer-alt blue"></i>

                   <p>
                    Lectures
                    </p>
                   </a>

                  @endif
               </li>

                {{--  // end of first link   --}}


               <li class="nav-item has-treeview">

                  @if (session()->get('user')=='admin')
                  <a class="nav-link nav-click" href="/lectures/create/timetable">
                    <i class="fas fa-table green"></i>

                    <p>
                        Post Timetable 
                    </p>
                  </a>    
                  @endif
                  @if (session()->get('user')=='teacher')
                  <a class="nav-link nav-click" href="/lectures">
                    <i class="fas fa-edit"></i>

                    <p>
                        Update or delete lecture 
                    </p>
                   </a>
                  @endif

             @if (session()->get('user')=='student')
  
                   <a class="nav-link nav-click" href="/select-lecture-marks">
                   <i class="fas fa-marker green"></i>

                   <p>
                     Marks 
                    </p>
                   </a>

                  @endif
               </li>

              {{--  end of second link     --}}
              <li class="nav-item has-treeview">

                  @if (session()->get('user')=='admin')
                  <a class="nav-link nav-click" href="/lectures/timetables">
                    <i class="fas fa-table blue"></i>

                    <p>
                        Update timetables 
                    </p>
                  </a>    
                  @endif
                  @if (session()->get('user')=='teacher')
                  <a class="nav-link nav-click" href="/select-lecture-absence">
                    <i class="fas fa-times-circle yellow"></i>

                    <p>
                        Edit absence
                    </p>
                   </a>
                  @endif

             @if (session()->get('user')=='student')
  
                   <a class="nav-link nav-click" href="/absence/lectures">
                   <i class="fas fa-bed white"></i>

                   <p>
                     Absence 
                    </p>
                   </a>

                  @endif
               </li>


          {{--  end of third link  --}}

          <li class="nav-item has-treeview">

              @if (session()->get('user')=='admin')
              <a class="nav-link nav-click" href="/select/id/te-st">
                <i class="fas fa-id-card  "></i>

                <p>
                    Create Id
                </p>
              </a>    
              @endif
              @if (session()->get('user')=='teacher')
              <a class="nav-link nav-click" href="/show/timetable/te">
                <i class="fas fa-table purple"></i>

                <p>
                    View Timetables
                </p>
               </a>
              @endif

         @if (session()->get('user')=='student')

               <a class="nav-link nav-click" href="/show/timetable/st">
               <i class="fas fa-table  pink"></i>

               <p>
                 Timetable
                </p>
               </a>

              @endif
           </li>

           {{--  end of fourth link  --}}
           <li class="nav-item has-treeview">

              @if (session()->get('user')=='admin')
              <a class="nav-link nav-click" href="/info/a">
                <i class="fas  fa-info-circle yellow"></i>

                <p>
                    View Profile
                </p>
              </a>    
              @endif
              @if (session()->get('user')=='teacher')
              <a class="nav-link nav-click" href="/info/t">
                <i class="fas  fa-info-circle orange"></i>

                <p>
                    View Profile
                </p>
               </a>
              @endif

              @if (session()->get('user')=='student')
              <a class="nav-link nav-click" href="/info/s">
                <i class="fas fa-info-circle orange"></i>

                <p>
                   View Profile
                </p>
               </a>
              @endif
           </li>
           
           <li class="nav-item has-treeview">
              @if (session()->get('user')=='admin')
              <a class="nav-link nav-click" href="/create/subject">
                <i class="fas fa-newspaper orange"></i>

                <p>
                    Create subjects
                </p>
               </a>
              @endif
           </li>
           {{-- end of fifth link --}}
          <li class="nav-item">
             <a   href="/logout" class="nav-link"   >
              <i class="fa fa-power-off red"></i>
              <p>
                  Logout
              </p>
            </a>

           </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

                  @yield('content')
                  
                  @if (Session::has('message'))
                  <p class="notification is-warning">{{session()->get('message')}}</p>
          
                      
                  @endif
                 <!-- Creating alerts -->
                  @if(!empty($messageCreatingLecture))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    {{$messageCreatingLecture}}
                   </div>
                     @elseif (!empty($messageLectureUpdate))

                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    {{$messageLectureUpdate}}
                   </div>

                   
                   @elseif (!empty($messageLectureDelete))
                   <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    {{$messageLectureDelete}}
                   </div>
                   @
                   @elseif (!empty($messageAbsence))
                   <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    {{$messageAbsence}}
                   </div>
                   
                   @elseif (!empty($messageMarks))
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    {{$messageMarks}}
                   </div>

                   @elseif (!empty($messageCreateTimetable))
                   <div class="alert alert-success alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   <h5><i class="icon fa fa-check"></i> Alert!</h5>
                   {{$messageCreateTimetable}}
                  </div>

                  @elseif (!empty($messageUpdateTimetable))
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fa fa-check"></i> Alert!</h5>
                  {{$messageUpdateTimetable}}
                 </div>

                 @elseif (!empty($messageDeleteTimetable))
                 <div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                 <h5><i class="icon fa fa-check"></i> Alert!</h5>
                 {{$messageDeleteTimetable}}
                </div>
                @elseif (!empty($messageSubject))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-check"></i> Alert!</h5>
                {{$messageSubject}}
               </div>
                  @endif


                  <!-- End alerts -->

    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  {{--  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>  --}}
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
 <script>
    $('document').ready(function(){

      $('.nav-clic').click(function (event) {
        // Avoid the link click from loading a new page
        event.preventDefault();
    
        // Load the content from the link's href attribute
        $('.container-fluid').load($(this).attr('href'));
    })

    });
   
 </script>

</body>
</html>
