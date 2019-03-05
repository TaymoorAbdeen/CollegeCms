<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
  
   

</head>

<body class="bg-white">
  
  {{-- navbar --}}  
  <section id="header-section" class="">

    <section id="navbar-section">
      <header>
          <nav class="navbar navbar-light navbar-expand-lg navbar-template">
            <a class="navbar-brand logo" href="">UokSMS</a>
            <div class="d-flex flex-row order-2 order-lg-3">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse order-3 order-lg-2" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#header-section">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-section">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#guide-section">Guide</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact-section">Contact</a></li>
                <li class="nav-item border border-primary rounded"><a class="nav-link" href="/">Register / Login</a></li>
              </ul>
            </div>
          </nav>
        </header>
      </section>
    {{-- navbar --}}
    

    {{-- republic --}}
    <section id="republic-section">
      <div class="republic-section mt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <img class="republic " src="/images/republic.png" height="" width="90%" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- republic --}}
    
    
    {{-- login --}}
    <section id="login-section" class="">
      <div class="container">
        <div class="row">
          <div class="col-md-7 login-col">
            <h1 class="text-primary text-uppercase">UokSMS</h1>
            <h4 class="text-primary">University of kirkuk student management system</h4>
            <a href="/" class="btn btn-primary btn-login mr-3">Login <i class="fas fa-sign-in-alt"></i></a>
            <a href="/" class="btn bg-white btn-login text-primary">Register</a>
          </div>
          <div class="col-md-5 login-col">
            <img src="images/log.gif" width="90%" style="opacity: 0.7" alt="">
          </div>
        </div>
      </div>
    </section>
    {{-- login --}}
  </section>
  
  {{-- team --}}
  <section id="team-section">
    <div class="team">
      <div class="container">
        <h1>Team members</h1>
        <h4 class="mb-0">This is our team of students are Ari, Taymoor and Luqman supervised by Kamal</h4>
        <div class="team-row">
  
          <div class="col col1">
            <div class="team-member mem1">
              <img src="images/pic.png" alt="">
              <span class="badge badge-primary mt-2">Student</span>
              <div class="member-name">Ari Moayyad</div>
              {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
              <div class="member-icons">
                <a href="https://twitter.com/taymoorabdeen"><i class="fab fa-twitter"></i></a>
                <a href="https://t.me/taymoorabdeen"><i class="fab fa-telegram"></i></a>
                <a href="https://www.facebook.com/TaymoorAbdeen"><i class="fab fa-facebook"></i></i></a>
              </div>
            </div>
          </div>
          <div class="col col2">
            <div class="team-member mem2">
              <img src="images/pic.png" alt="">
              <span class="badge badge-primary mt-2">Student</span>
              <div class="member-name">Taymoor Abdeen</div>
              {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
              <div class="member-icons">
                <a href="https://twitter.com/taymoorabdeen"><i class="fab fa-twitter"></i></a>
                <a href="https://t.me/taymoorabdeen"><i class="fab fa-telegram"></i></a>
                <a href="https://www.facebook.com/TaymoorAbdeen"><i class="fab fa-facebook"></i></i></a>
              </div>
            </div>
          </div>
          <div class="col col3">
            <div class="team-member mem3">
              <img src="images/pic.png" alt="">
              <span class="badge badge-primary mt-2">Student</span>
              <div class="member-name">Luqman Ghazi</div>
              {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
              <div class="member-icons">
                <a href="https://twitter.com/taymoorabdeen"><i class="fab fa-twitter"></i></a>
                <a href="https://t.me/taymoorabdeen"><i class="fab fa-telegram"></i></a>
                <a href="https://www.facebook.com/TaymoorAbdeen"><i class="fab fa-facebook"></i></i></a>
              </div>
            </div>
          </div>
          <div class="col col4">
            <div class="team-member mem4">
              <img src="images/kamal-hassan.png" alt="">
              <span class="badge badge-success mt-2">Supervisor</span>
              <div class="member-name">Kamal Hassan</div>
              {{-- <p>Lorem ipsum dolor sit amet.</p> --}}
              <div class="member-icons">
                <a href="https://twitter.com/taymoorabdeen"><i class="fab fa-twitter"></i></a>
                <a href="https://t.me/taymoorabdeen"><i class="fab fa-telegram"></i></a>
                <a href="https://www.facebook.com/TaymoorAbdeen"><i class="fab fa-facebook"></i></i></a>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>

    
    {{-- video and pdf guide section =--(start)-->  --}}
    <section id="guide-section" class="mt-5">
      <div class="container">
        <div class="col-md-12 text-primary text-center">
          <h1 class="text-center text-primary text-uppercase">Guide</h1>
          <h4>here you can learn how to do woth this website</h4>
        </div>

        <div class="card-deck">
          {{-- video pmodal --}}
          <div class="card card1">
            <img data-toggle="modal" data-target="#homeVideo" width="30px" class="card-img-top" {{-- video image --}}
            src="images/guide-v.png" onclick="playVid()" />
          </div>

          {{-- pdf modal --}}
          <div class="card card2">
            <img src="images/guide-p.png" class="card-img-top" data-toggle="modal" data-target="#pdfGuide" />
          </div>

        </div>
      </div>
            <div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="pauseVid()">x</button>
                  <div class="embed-responsive embed-responsive-16by9">
                    <video id="guideVideo" class="embed-responsive-item" controls="controls">
                      <source src="videos/guide-video.mp4" type="video/mp4">
                        {{-- <source src="videos/guide-video.webm" type="video/webm"> --}}
                          {{-- <source src="videos/guide-video.ogv" type="video/ogg"> --}}
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="pdfGuide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="pdf\you-don-t-know-js.pdf">
                                <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                        An &#105;frame should be displayed here but your browser version does not support
                                        &#105;frames.
                                    </em>Please update your browser to its most recent version and try again.</p>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    {{-- video and pdf  guide section <--(end)--=  --}}
    
    
    {{-- about section =--(start)-->  --}}
    <section id="about-section">
        <div class="container">
          <h1 class="text-center mt-5">UoKSMS</h1>
          <h4 class="text-center">
              <strong>U</strong>niversity
              <strong>o</strong>f
              <strong>K</strong>irkuk
              <strong>S</strong>tudent
              <strong>M</strong>anagement
              <strong>S</strong>ystem
          </h4>

          <h4>Site Functionalities.</h4>
          <ul class="list-group">
						<li class="list-group-item">What an admin can see or do:</li>
						<li class="list-group-item list-group-item-primary">Dashboard: which shows the statistics of the department</li>
						<li class="list-group-item list-group-item-secondary">Post or edit marks</li>
						<li class="list-group-item list-group-item-success">Post timetable</li>
						<li class="list-group-item list-group-item-danger">Update timetable</li>
						<li class="list-group-item list-group-item-warning">Create identifaction numbers for students </li>
						<li class="list-group-item list-group-item-info">View profile </li>
						<li class="list-group-item list-group-item-dark">Logout</li>
            </ul>

             <ul class="list-group" style="margin-bottom:40px;">
          
            </ul>

            <div class="row">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>

        </div>
    </section>
    
    {{-- about section <--(end)--=  --}}
    
    
    
    {{-- skill section =--(start)-->  --}}
    <section id="skill-section" class="mt-5">
      <div class="container">
        <h1 class="text-center text-primary text-uppercase">our skills</h1>
        <h4 class="text-center text-primary">Lorem ipsum dolor sit amet.</h4>
        <div class="row">

          <div class="col-md-12">
            <div class="skill mb-2 skill2">
                <b style="color: #E44D26">HTML</b>
                <div class="progress shadow">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: #E44D26"
                      role="progressbar" data-progress="76%">
                    </div>
                </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill2">
              <b class="text-info">CSS</b>
              <div class="progress shadow">
                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                  role="progressbar" data-progress="66%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill2">
              <b style="color: #D175A1">SASS</b>
              <div class="progress shadow">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: #D175A1"
                  role="progressbar" data-progress="32%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill3">
              <b class="text-success">JAVASCRIPT</b>
              <div class="progress shadow">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                role="progressbar" data-progress="88%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill5 ">
              <b style="color: #886aba">BOOTSTRAP</b>
              <div class="progress shadow">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: #886aba"
                  role="progressbar" data-progress="73%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill4">
              <b class="text-danger">JQUREY</b>
              <div class="progress shadow">
                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                  role="progressbar" data-progress="52%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill6">
              <b style="color: #8B9BD6">PHP</b>
              <div class="progress shadow">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: #8B9BD6"
                  role="progressbar" data-progress="70%">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="skill mb-2 skill7">
              <b style="color: OrangeRed">LARAVEL</b>
              <div class="progress shadow">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: OrangeRed"
                  role="progressbar" data-progress="94%">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="skill mb-2 skill8">
              <b style="color: #00758F">MYSQL</b>
              <div class="progress shadow">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: #00758F"
                  role="progressbar" data-progress="84%">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- skill section <--(end)--=  --}}
    
    
    {{-- contact section =--(start)-->  --}}
    <section id="contact-section" class="mt-5">
      <div class="container">
        <h1 class="text-center text-primary text-uppercase">This is contact us</h1>
        <h4 class="text-center text-primary">if you have any problem or any feedback you can tell us</h4>
        
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name: </label>
              <input type="text" class="form-control" placeholder="Enter your name">
            </div>
            
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" class="form-control" rows="5" placeholder="Enter your message"></textarea>
          </div>
          
          <div class="">
            <button type="submit" class="btn btn-primary">Send <i class="fas fa-envelope"></i></button>
          </div>
        </form>
      </div>
    </section>
    {{-- contact section <--(end)--=  --}}

    

    {{-- footer section =--(start)-->  --}}
    <footer id="footer-section" class="mt-5">
      <div class="container text-center text-md-left">
     
        <div class="row text-center">
          <div class="col-md-4 footer1">
            <h4>if you are satisfied with the webisite performance please leave feedback </h4>
            <form action="">
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline1">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">No</label>
                </div>
              </div>
              <button href="#!" class="btn btn-success btn-rounded">Submit</button>
            </form>
          </div>
          
          <!-- Social buttons -->
          <div class="col-md-4 footer2">
            <h4>University Of Kirkuk</h4>
            <h5 class="mb-3">Made by students for students</h5>
            <div class="rounded-social-buttons">
              <a class="social-button facebook" href="https://www.facebook.com/taymoorabdeen" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a class="social-button twitter" href="https://www.twitter.com/taymoorabdeen" target="_blank"><i class="fab fa-twitter"></i></a>
              <a class="social-button linkedin" href="https://www.linkedin.com/taymoorabdeen" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a class="social-button youtube" href="https://www.youtube.com/taymoorabdeen" target="_blank"><i class="fab fa-youtube"></i></a>
              <a class="social-button instagram" href="https://www.instagram.com/taymoorabdeen" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <!-- Social buttons -->
          
          <div class="col-md-4 footer3">
            <h4>University of kirkuk</h4>
            <h5 class="mb-3">Made for students by students</h5>
            <button href="#!" class="btn btn-success btn-rounded">Login</button>
          </div>
        </div>
          

        
      </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="/">UoKSMS.uok.edu</a>
        </div>
        <!-- Copyright -->
    
    </footer>

    {{-- footer section <--(end)--=  --}}
    

		<script src="/js/app.js"></script>
		<script src="/js/welcome.js"></script>

	 


    {{-- ScrollReveal script <--(end)--= --}}
    
</body>

</html>