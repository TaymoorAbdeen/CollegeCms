<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
  
  <style>
    /* name style =--(start)--> */
    /* name style <--(end)--= */

    
    /* Navbar Section style =--(start)--> */
    #navbar-section .logo {
      font-size: 1.4rem;
      color: #555;
    }
    #navbar-section a {
      font-size: 1rem;
      color: #555;
    }
    
    /* Navbar Section style <--(end)--= */


    
    /* Header Section style =--(start)--> */
    #header-section{
      background-image: url('images/background1.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: contain;
      background-size: 100%;
      font-weight: bold;
    }
    /* Header Section style <--(end)--= */
    
    
    /* Republic Section style =--(start)--> */
    #republic-section img{
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
      border-radius: 1.3rem;
    }
    /* Republic Section style <--(end)--= */
    
    
    
    /* Login Section style =--(start)--> */
    #login-section {
      /* background-image: url('images/login.png'); */
      /* background-repeat: no-repeat; */
      /* background-size: cover;       */
    }
    .btn-login{
      font-size: 1em;
      padding: 0.5rem 3rem;
      border-radius: 2rem;
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
    }
    .login-side img {
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
    }
    /* Login Section style <--(end)--= */
    
    
    /* Team Section style =--(start)--> */
    #team-section{
      background-image: url('images/paralax.png');
      background-attachment: fixed;
      background-size: cover;
    }
    .team {
      padding: 10px 0;
      color: #434343;
      text-align: center;
    }
    .team h1, .team h4 {
      color: #3490dc;
    }
    .inner {
      max-width: 1200px;
      margin: auto;
      overflow: hidden;
      padding: 0 20px;
    }
    .team-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    } 
    .col {
      flex: 25%;
      max-width: 25%;
      box-sizing: border-box;
      padding: 25px;
    }
    .team-member {
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
      transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }
    .team-member:hover {
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25), 0 5px 5px rgba(0, 0, 0, 0.22);
    }
    .team-member img {
      width: 75%;
      height: 75%;
      border-radius: 50%;
      box-shadow: 0 1px 20px rgba(0, 0, 0, 0.12), 0 2px 2px rgba(0, 0, 0, 0.24);
    }
    .member-name {
      font-size: 20px;
      text-transform: uppercase;
      margin: 0px 0;
    }
    .member-icons {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    @media screen and (max-width:960px) {
      .col {
        flex: 50%;
        max-width: 80%;
      }
    }
    @media screen and (max-width:600px) {
      #header-section{
        background-size: cover;
      }
      .col {
        flex: 50%;
        max-width: 100%;
      }
    }
    /* Team Section style <--(end)--= */


    /* Guide Section style =--(start)--> */
    #guide-section {
      background-image: url('images/paralax.png');
      background-attachment: fixed;
      background-size: cover;
    }
    #guide-section .card{
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
      transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }
    #guide-section .card:hover{
      cursor: pointer;
      box-shadow: 0 1px 20px rgba(0, 0, 0, 0.12), 0 2px 2px rgba(0, 0, 0, 0.24);
    }
    #homeVideo button.btn.btn-default {
      background: rgba(0, 0, 0, 0.12);
      padding: 0 5px;
      border-radius: 10%;
      position: absolute;
      top: 1px;
      right: 1px;
      z-index: 5;
      color: white;
    }

    /* Guide Section style <--(end)--= */
    
    
    /* skill style =--(start)--> */
    #skill-section {
      background-image: url('images/paralax.png');
      /* background-position: top right ; */
      background-size: cover
    }
    .progress .progress-bar{
        width: 0;
        transition: all ease 0.5s
    }
    /* skill style <--(end)--= */
    
    
    /* Contact Section style =--(start)--> */
    #contact-section {
      background-image: url('images/paralax.png');
      /* background-position: top right ; */
      background-size: cover
      /* background-color: ; */
    }
    #contact-section .container{
      padding: 40px 20px;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(95,125,149,0.3);
      transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }
    
    /* #contact-section input,
    #contact-section input[:placeholder],
    #contact-section textarea[:placeholder],
    #contact-section textarea {
      background: transparent;
      color: #000;

    } */
    /* Contact Section style <--(end)--= */


    /* Footer Section style =--(start)--> */
		#footer-section{
      background-image: url('images/paralax.png');
      /* background-position: top right ; */
      background-size: cover

		}
    .svg-inline--fa {
  vertical-align: -0.200em;
}

.rounded-social-buttons {
  text-align: center;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 3.125rem;
  height: 3.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.5625rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
  font-size: 25px;
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #125688;
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #125688;
  background: #fefefe;
  border-color: #125688;
}
    /* Footer Section style <--(end)--= */
    
    
  </style>

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
		<script>
    /*! @license ScrollReveal v4.0.5

	Copyright 2018 Fisssion LLC.

	Licensed under the GNU General Public License 3.0 for
	compatible open source projects and non-commercial use.

	For commercial sites, themes, projects, and applications,
	keep your source code private/proprietary by purchasing
	a commercial license from https://scrollrevealjs.org/
*/
(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(global.ScrollReveal = factory());
}(this, (function () { 'use strict';

var defaults = {
	delay: 0,
	distance: '0',
	duration: 600,
	easing: 'cubic-bezier(0.5, 0, 0, 1)',
	interval: 0,
	opacity: 0,
	origin: 'bottom',
	rotate: {
		x: 0,
		y: 0,
		z: 0
	},
	scale: 1,
	cleanup: false,
	container: document.documentElement,
	desktop: true,
	mobile: true,
	reset: false,
	useDelay: 'always',
	viewFactor: 0.0,
	viewOffset: {
		top: 0,
		right: 0,
		bottom: 0,
		left: 0
	},
	afterReset: function afterReset() {},
	afterReveal: function afterReveal() {},
	beforeReset: function beforeReset() {},
	beforeReveal: function beforeReveal() {}
}

function failure() {
	document.documentElement.classList.remove('sr');

	return {
		clean: function clean() {},
		destroy: function destroy() {},
		reveal: function reveal() {},
		sync: function sync() {},
		get noop() {
			return true
		}
	}
}

function success() {
	document.documentElement.classList.add('sr');

	if (document.body) {
		document.body.style.height = '100%';
	} else {
		document.addEventListener('DOMContentLoaded', function () {
			document.body.style.height = '100%';
		});
	}
}

var mount = { success: success, failure: failure }

/*! @license is-dom-node v1.0.4

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/
function isDomNode(x) {
	return typeof window.Node === 'object'
		? x instanceof window.Node
		: x !== null &&
				typeof x === 'object' &&
				typeof x.nodeType === 'number' &&
				typeof x.nodeName === 'string'
}

/*! @license is-dom-node-list v1.2.1

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/
function isDomNodeList(x) {
	var prototypeToString = Object.prototype.toString.call(x);
	var regex = /^\[object (HTMLCollection|NodeList|Object)\]$/;

	return typeof window.NodeList === 'object'
		? x instanceof window.NodeList
		: x !== null &&
				typeof x === 'object' &&
				typeof x.length === 'number' &&
				regex.test(prototypeToString) &&
				(x.length === 0 || isDomNode(x[0]))
}

/*! @license Tealight v0.3.6

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/
function tealight(target, context) {
  if ( context === void 0 ) { context = document; }

  if (target instanceof Array) { return target.filter(isDomNode); }
  if (isDomNode(target)) { return [target]; }
  if (isDomNodeList(target)) { return Array.prototype.slice.call(target); }
  if (typeof target === "string") {
    try {
      var query = context.querySelectorAll(target);
      return Array.prototype.slice.call(query);
    } catch (err) {
      return [];
    }
  }
  return [];
}

function isObject(x) {
	return (
		x !== null &&
		x instanceof Object &&
		(x.constructor === Object ||
			Object.prototype.toString.call(x) === '[object Object]')
	)
}

function each(collection, callback) {
	if (isObject(collection)) {
		var keys = Object.keys(collection);
		return keys.forEach(function (key) { return callback(collection[key], key, collection); })
	}
	if (collection instanceof Array) {
		return collection.forEach(function (item, i) { return callback(item, i, collection); })
	}
	throw new TypeError('Expected either an array or object literal.')
}

function logger(message) {
	var details = [], len = arguments.length - 1;
	while ( len-- > 0 ) details[ len ] = arguments[ len + 1 ];

	if (this.constructor.debug && console) {
		var report = "%cScrollReveal: " + message;
		details.forEach(function (detail) { return (report += "\n — " + detail); });
		console.log(report, 'color: #ea654b;'); // eslint-disable-line no-console
	}
}

function rinse() {
	var this$1 = this;

	var struct = function () { return ({
		active: [],
		stale: []
	}); };

	var elementIds = struct();
	var sequenceIds = struct();
	var containerIds = struct();

	/**
	 * Take stock of active element IDs.
	 */
	try {
		each(tealight('[data-sr-id]'), function (node) {
			var id = parseInt(node.getAttribute('data-sr-id'));
			elementIds.active.push(id);
		});
	} catch (e) {
		throw e
	}
	/**
	 * Destroy stale elements.
	 */
	each(this.store.elements, function (element) {
		if (elementIds.active.indexOf(element.id) === -1) {
			elementIds.stale.push(element.id);
		}
	});

	each(elementIds.stale, function (staleId) { return delete this$1.store.elements[staleId]; });

	/**
	 * Take stock of active container and sequence IDs.
	 */
	each(this.store.elements, function (element) {
		if (containerIds.active.indexOf(element.containerId) === -1) {
			containerIds.active.push(element.containerId);
		}
		if (element.hasOwnProperty('sequence')) {
			if (sequenceIds.active.indexOf(element.sequence.id) === -1) {
				sequenceIds.active.push(element.sequence.id);
			}
		}
	});

	/**
	 * Destroy stale containers.
	 */
	each(this.store.containers, function (container) {
		if (containerIds.active.indexOf(container.id) === -1) {
			containerIds.stale.push(container.id);
		}
	});

	each(containerIds.stale, function (staleId) {
		var stale = this$1.store.containers[staleId].node;
		stale.removeEventListener('scroll', this$1.delegate);
		stale.removeEventListener('resize', this$1.delegate);
		delete this$1.store.containers[staleId];
	});

	/**
	 * Destroy stale sequences.
	 */
	each(this.store.sequences, function (sequence) {
		if (sequenceIds.active.indexOf(sequence.id) === -1) {
			sequenceIds.stale.push(sequence.id);
		}
	});

	each(sequenceIds.stale, function (staleId) { return delete this$1.store.sequences[staleId]; });
}

function clean(target) {
	var this$1 = this;

	var dirty;
	try {
		each(tealight(target), function (node) {
			var id = node.getAttribute('data-sr-id');
			if (id !== null) {
				dirty = true;
				var element = this$1.store.elements[id];
				if (element.callbackTimer) {
					window.clearTimeout(element.callbackTimer.clock);
				}
				node.setAttribute('style', element.styles.inline.generated);
				node.removeAttribute('data-sr-id');
				delete this$1.store.elements[id];
			}
		});
	} catch (e) {
		return logger.call(this, 'Clean failed.', e.message)
	}

	if (dirty) {
		try {
			rinse.call(this);
		} catch (e) {
			return logger.call(this, 'Clean failed.', e.message)
		}
	}
}

function destroy() {
	var this$1 = this;

	/**
	 * Remove all generated styles and element ids
	 */
	each(this.store.elements, function (element) {
		element.node.setAttribute('style', element.styles.inline.generated);
		element.node.removeAttribute('data-sr-id');
	});

	/**
	 * Remove all event listeners.
	 */
	each(this.store.containers, function (container) {
		var target =
			container.node === document.documentElement ? window : container.node;
		target.removeEventListener('scroll', this$1.delegate);
		target.removeEventListener('resize', this$1.delegate);
	});

	/**
	 * Clear all data from the store
	 */
	this.store = {
		containers: {},
		elements: {},
		history: [],
		sequences: {}
	};
}

/*! @license Rematrix v0.3.0

	Copyright 2018 Julian Lloyd.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
*/
/**
 * @module Rematrix
 */

/**
 * Transformation matrices in the browser come in two flavors:
 *
 *  - `matrix` using 6 values (short)
 *  - `matrix3d` using 16 values (long)
 *
 * This utility follows this [conversion guide](https://goo.gl/EJlUQ1)
 * to expand short form matrices to their equivalent long form.
 *
 * @param  {array} source - Accepts both short and long form matrices.
 * @return {array}
 */
function format(source) {
	if (source.constructor !== Array) {
		throw new TypeError('Expected array.')
	}
	if (source.length === 16) {
		return source
	}
	if (source.length === 6) {
		var matrix = identity();
		matrix[0] = source[0];
		matrix[1] = source[1];
		matrix[4] = source[2];
		matrix[5] = source[3];
		matrix[12] = source[4];
		matrix[13] = source[5];
		return matrix
	}
	throw new RangeError('Expected array with either 6 or 16 values.')
}

/**
 * Returns a matrix representing no transformation. The product of any matrix
 * multiplied by the identity matrix will be the original matrix.
 *
 * > **Tip:** Similar to how `5 * 1 === 5`, where `1` is the identity.
 *
 * @return {array}
 */
function identity() {
	var matrix = [];
	for (var i = 0; i < 16; i++) {
		i % 5 == 0 ? matrix.push(1) : matrix.push(0);
	}
	return matrix
}

/**
 * Returns a 4x4 matrix describing the combined transformations
 * of both arguments.
 *
 * > **Note:** Order is very important. For example, rotating 45°
 * along the Z-axis, followed by translating 500 pixels along the
 * Y-axis... is not the same as translating 500 pixels along the
 * Y-axis, followed by rotating 45° along on the Z-axis.
 *
 * @param  {array} m - Accepts both short and long form matrices.
 * @param  {array} x - Accepts both short and long form matrices.
 * @return {array}
 */
function multiply(m, x) {
	var fm = format(m);
	var fx = format(x);
	var product = [];

	for (var i = 0; i < 4; i++) {
		var row = [fm[i], fm[i + 4], fm[i + 8], fm[i + 12]];
		for (var j = 0; j < 4; j++) {
			var k = j * 4;
			var col = [fx[k], fx[k + 1], fx[k + 2], fx[k + 3]];
			var result =
				row[0] * col[0] + row[1] * col[1] + row[2] * col[2] + row[3] * col[3];

			product[i + k] = result;
		}
	}

	return product
}

/**
 * Attempts to return a 4x4 matrix describing the CSS transform
 * matrix passed in, but will return the identity matrix as a
 * fallback.
 *
 * > **Tip:** This method is used to convert a CSS matrix (retrieved as a
 * `string` from computed styles) to its equivalent array format.
 *
 * @param  {string} source - `matrix` or `matrix3d` CSS Transform value.
 * @return {array}
 */
function parse(source) {
	if (typeof source === 'string') {
		var match = source.match(/matrix(3d)?\(([^)]+)\)/);
		if (match) {
			var raw = match[2].split(', ').map(parseFloat);
			return format(raw)
		}
	}
	return identity()
}

/**
 * Returns a 4x4 matrix describing X-axis rotation.
 *
 * @param  {number} angle - Measured in degrees.
 * @return {array}
 */
function rotateX(angle) {
	var theta = Math.PI / 180 * angle;
	var matrix = identity();

	matrix[5] = matrix[10] = Math.cos(theta);
	matrix[6] = matrix[9] = Math.sin(theta);
	matrix[9] *= -1;

	return matrix
}

/**
 * Returns a 4x4 matrix describing Y-axis rotation.
 *
 * @param  {number} angle - Measured in degrees.
 * @return {array}
 */
function rotateY(angle) {
	var theta = Math.PI / 180 * angle;
	var matrix = identity();

	matrix[0] = matrix[10] = Math.cos(theta);
	matrix[2] = matrix[8] = Math.sin(theta);
	matrix[2] *= -1;

	return matrix
}

/**
 * Returns a 4x4 matrix describing Z-axis rotation.
 *
 * @param  {number} angle - Measured in degrees.
 * @return {array}
 */
function rotateZ(angle) {
	var theta = Math.PI / 180 * angle;
	var matrix = identity();

	matrix[0] = matrix[5] = Math.cos(theta);
	matrix[1] = matrix[4] = Math.sin(theta);
	matrix[4] *= -1;

	return matrix
}

/**
 * Returns a 4x4 matrix describing 2D scaling. The first argument
 * is used for both X and Y-axis scaling, unless an optional
 * second argument is provided to explicitly define Y-axis scaling.
 *
 * @param  {number} scalar    - Decimal multiplier.
 * @param  {number} [scalarY] - Decimal multiplier.
 * @return {array}
 */
function scale(scalar, scalarY) {
	var matrix = identity();

	matrix[0] = scalar;
	matrix[5] = typeof scalarY === 'number' ? scalarY : scalar;

	return matrix
}

/**
 * Returns a 4x4 matrix describing X-axis translation.
 *
 * @param  {number} distance - Measured in pixels.
 * @return {array}
 */
function translateX(distance) {
	var matrix = identity();
	matrix[12] = distance;
	return matrix
}

/**
 * Returns a 4x4 matrix describing Y-axis translation.
 *
 * @param  {number} distance - Measured in pixels.
 * @return {array}
 */
function translateY(distance) {
	var matrix = identity();
	matrix[13] = distance;
	return matrix
}

var getPrefixedCssProp = (function () {
	var properties = {};
	var style = document.documentElement.style;

	function getPrefixedCssProperty(name, source) {
		if ( source === void 0 ) source = style;

		if (name && typeof name === 'string') {
			if (properties[name]) {
				return properties[name]
			}
			if (typeof source[name] === 'string') {
				return (properties[name] = name)
			}
			if (typeof source[("-webkit-" + name)] === 'string') {
				return (properties[name] = "-webkit-" + name)
			}
			throw new RangeError(("Unable to find \"" + name + "\" style property."))
		}
		throw new TypeError('Expected a string.')
	}

	getPrefixedCssProperty.clearCache = function () { return (properties = {}); };

	return getPrefixedCssProperty
})();

function style(element) {
	var computed = window.getComputedStyle(element.node);
	var position = computed.position;
	var config = element.config;

	/**
	 * Generate inline styles
	 */
	var inline = {};
	var inlineStyle = element.node.getAttribute('style') || '';
	var inlineMatch = inlineStyle.match(/[\w-]+\s*:\s*[^;]+\s*/gi) || [];

	inline.computed = inlineMatch ? inlineMatch.map(function (m) { return m.trim(); }).join('; ') + ';' : '';

	inline.generated = inlineMatch.some(function (m) { return m.match(/visibility\s?:\s?visible/i); })
		? inline.computed
		: inlineMatch.concat( ['visibility: visible']).map(function (m) { return m.trim(); }).join('; ') + ';';

	/**
	 * Generate opacity styles
	 */
	var computedOpacity = parseFloat(computed.opacity);
	var configOpacity = !isNaN(parseFloat(config.opacity))
		? parseFloat(config.opacity)
		: parseFloat(computed.opacity);

	var opacity = {
		computed: computedOpacity !== configOpacity ? ("opacity: " + computedOpacity + ";") : '',
		generated: computedOpacity !== configOpacity ? ("opacity: " + configOpacity + ";") : ''
	};

	/**
	 * Generate transformation styles
	 */
	var transformations = [];

	if (parseFloat(config.distance)) {
		var axis = config.origin === 'top' || config.origin === 'bottom' ? 'Y' : 'X';

		/**
		 * Let’s make sure our our pixel distances are negative for top and left.
		 * e.g. { origin: 'top', distance: '25px' } starts at `top: -25px` in CSS.
		 */
		var distance = config.distance;
		if (config.origin === 'top' || config.origin === 'left') {
			distance = /^-/.test(distance) ? distance.substr(1) : ("-" + distance);
		}

		var ref = distance.match(/(^-?\d+\.?\d?)|(em$|px$|%$)/g);
		var value = ref[0];
		var unit = ref[1];

		switch (unit) {
			case 'em':
				distance = parseInt(computed.fontSize) * value;
				break
			case 'px':
				distance = value;
				break
			case '%':
				/**
				 * Here we use `getBoundingClientRect` instead of
				 * the existing data attached to `element.geometry`
				 * because only the former includes any transformations
				 * current applied to the element.
				 *
				 * If that behavior ends up being unintuitive, this
				 * logic could instead utilize `element.geometry.height`
				 * and `element.geoemetry.width` for the distaince calculation
				 */
				distance =
					axis === 'Y'
						? element.node.getBoundingClientRect().height * value / 100
						: element.node.getBoundingClientRect().width * value / 100;
				break
			default:
				throw new RangeError('Unrecognized or missing distance unit.')
		}

		if (axis === 'Y') {
			transformations.push(translateY(distance));
		} else {
			transformations.push(translateX(distance));
		}
	}

	if (config.rotate.x) { transformations.push(rotateX(config.rotate.x)); }
	if (config.rotate.y) { transformations.push(rotateY(config.rotate.y)); }
	if (config.rotate.z) { transformations.push(rotateZ(config.rotate.z)); }
	if (config.scale !== 1) {
		if (config.scale === 0) {
			/**
			 * The CSS Transforms matrix interpolation specification
			 * basically disallows transitions of non-invertible
			 * matrixes, which means browsers won't transition
			 * elements with zero scale.
			 *
			 * That’s inconvenient for the API and developer
			 * experience, so we simply nudge their value
			 * slightly above zero; this allows browsers
			 * to transition our element as expected.
			 *
			 * `0.0002` was the smallest number
			 * that performed across browsers.
			 */
			transformations.push(scale(0.0002));
		} else {
			transformations.push(scale(config.scale));
		}
	}

	var transform = {};
	if (transformations.length) {
		transform.property = getPrefixedCssProp('transform');
		/**
		 * The default computed transform value should be one of:
		 * undefined || 'none' || 'matrix()' || 'matrix3d()'
		 */
		transform.computed = {
			raw: computed[transform.property],
			matrix: parse(computed[transform.property])
		};

		transformations.unshift(transform.computed.matrix);
		var product = transformations.reduce(multiply);

		transform.generated = {
			initial: ((transform.property) + ": matrix3d(" + (product.join(', ')) + ");"),
			final: ((transform.property) + ": matrix3d(" + (transform.computed.matrix.join(
				', '
			)) + ");")
		};
	} else {
		transform.generated = {
			initial: '',
			final: ''
		};
	}

	/**
	 * Generate transition styles
	 */
	var transition = {};
	if (opacity.generated || transform.generated.initial) {
		transition.property = getPrefixedCssProp('transition');
		transition.computed = computed[transition.property];
		transition.fragments = [];

		var delay = config.delay;
		var duration = config.duration;
		var easing = config.easing;

		if (opacity.generated) {
			transition.fragments.push({
				delayed: ("opacity " + (duration / 1000) + "s " + easing + " " + (delay / 1000) + "s"),
				instant: ("opacity " + (duration / 1000) + "s " + easing + " 0s")
			});
		}

		if (transform.generated.initial) {
			transition.fragments.push({
				delayed: ((transform.property) + " " + (duration / 1000) + "s " + easing + " " + (delay /
					1000) + "s"),
				instant: ((transform.property) + " " + (duration / 1000) + "s " + easing + " 0s")
			});
		}

		/**
		 * The default computed transition property should be one of:
		 * undefined || '' || 'all 0s ease 0s' || 'all 0s 0s cubic-bezier()'
		 */
		if (transition.computed && !transition.computed.match(/all 0s/)) {
			transition.fragments.unshift({
				delayed: transition.computed,
				instant: transition.computed
			});
		}

		var composed = transition.fragments.reduce(
			function (composition, fragment, i) {
				composition.delayed +=
					i === 0 ? fragment.delayed : (", " + (fragment.delayed));
				composition.instant +=
					i === 0 ? fragment.instant : (", " + (fragment.instant));
				return composition
			},
			{
				delayed: '',
				instant: ''
			}
		);

		transition.generated = {
			delayed: ((transition.property) + ": " + (composed.delayed) + ";"),
			instant: ((transition.property) + ": " + (composed.instant) + ";")
		};
	} else {
		transition.generated = {
			delayed: '',
			instant: ''
		};
	}

	return {
		inline: inline,
		opacity: opacity,
		position: position,
		transform: transform,
		transition: transition
	}
}

function animate(element, force) {
	if ( force === void 0 ) force = {};

	var pristine = force.pristine || this.pristine;
	var delayed =
		element.config.useDelay === 'always' ||
		(element.config.useDelay === 'onload' && pristine) ||
		(element.config.useDelay === 'once' && !element.seen);

	var shouldReveal = element.visible && !element.revealed;
	var shouldReset = !element.visible && element.revealed && element.config.reset;

	if (force.reveal || shouldReveal) {
		return triggerReveal.call(this, element, delayed)
	}

	if (force.reset || shouldReset) {
		return triggerReset.call(this, element)
	}
}

function triggerReveal(element, delayed) {
	var styles = [
		element.styles.inline.generated,
		element.styles.opacity.computed,
		element.styles.transform.generated.final
	];
	if (delayed) {
		styles.push(element.styles.transition.generated.delayed);
	} else {
		styles.push(element.styles.transition.generated.instant);
	}
	element.revealed = element.seen = true;
	element.node.setAttribute('style', styles.filter(function (s) { return s !== ''; }).join(' '));
	registerCallbacks.call(this, element, delayed);
}

function triggerReset(element) {
	var styles = [
		element.styles.inline.generated,
		element.styles.opacity.generated,
		element.styles.transform.generated.initial,
		element.styles.transition.generated.instant
	];
	element.revealed = false;
	element.node.setAttribute('style', styles.filter(function (s) { return s !== ''; }).join(' '));
	registerCallbacks.call(this, element);
}

function registerCallbacks(element, isDelayed) {
	var this$1 = this;

	var duration = isDelayed
		? element.config.duration + element.config.delay
		: element.config.duration;

	var beforeCallback = element.revealed
		? element.config.beforeReveal
		: element.config.beforeReset;

	var afterCallback = element.revealed
		? element.config.afterReveal
		: element.config.afterReset;

	var elapsed = 0;
	if (element.callbackTimer) {
		elapsed = Date.now() - element.callbackTimer.start;
		window.clearTimeout(element.callbackTimer.clock);
	}

	beforeCallback(element.node);

	element.callbackTimer = {
		start: Date.now(),
		clock: window.setTimeout(function () {
			afterCallback(element.node);
			element.callbackTimer = null;
			if (element.revealed && !element.config.reset && element.config.cleanup) {
				clean.call(this$1, element.node);
			}
		}, duration - elapsed)
	};
}

var nextUniqueId = (function () {
	var uid = 0;
	return function () { return uid++; }
})();

function sequence(element, pristine) {
	if ( pristine === void 0 ) pristine = this.pristine;

	/**
	 * We first check if the element should reset.
	 */
	if (!element.visible && element.revealed && element.config.reset) {
		return animate.call(this, element, { reset: true })
	}

	var seq = this.store.sequences[element.sequence.id];
	var i = element.sequence.index;

	if (seq) {
		var visible = new SequenceModel(seq, 'visible', this.store);
		var revealed = new SequenceModel(seq, 'revealed', this.store);

		seq.models = { visible: visible, revealed: revealed };

		/**
		 * If the sequence has no revealed members,
		 * then we reveal the first visible element
		 * within that sequence.
		 *
		 * The sequence then cues a recursive call
		 * in both directions.
		 */
		if (!revealed.body.length) {
			var nextId = seq.members[visible.body[0]];
			var nextElement = this.store.elements[nextId];

			if (nextElement) {
				cue.call(this, seq, visible.body[0], -1, pristine);
				cue.call(this, seq, visible.body[0], +1, pristine);
				return animate.call(this, nextElement, { reveal: true, pristine: pristine })
			}
		}

		/**
		 * If our element isn’t resetting, we check the
		 * element sequence index against the head, and
		 * then the foot of the sequence.
		 */
		if (
			!seq.blocked.head &&
			i === [].concat( revealed.head ).pop() &&
			i >= [].concat( visible.body ).shift()
		) {
			cue.call(this, seq, i, -1, pristine);
			return animate.call(this, element, { reveal: true, pristine: pristine })
		}

		if (
			!seq.blocked.foot &&
			i === [].concat( revealed.foot ).shift() &&
			i <= [].concat( visible.body ).pop()
		) {
			cue.call(this, seq, i, +1, pristine);
			return animate.call(this, element, { reveal: true, pristine: pristine })
		}
	}
}

function Sequence(interval) {
	var i = Math.abs(interval);
	if (!isNaN(i)) {
		this.id = nextUniqueId();
		this.interval = Math.max(i, 16);
		this.members = [];
		this.models = {};
		this.blocked = {
			head: false,
			foot: false
		};
	} else {
		throw new RangeError('Invalid sequence interval.')
	}
}

function SequenceModel(seq, prop, store) {
	var this$1 = this;

	this.head = [];
	this.body = [];
	this.foot = [];

	each(seq.members, function (id, index) {
		var element = store.elements[id];
		if (element && element[prop]) {
			this$1.body.push(index);
		}
	});

	if (this.body.length) {
		each(seq.members, function (id, index) {
			var element = store.elements[id];
			if (element && !element[prop]) {
				if (index < this$1.body[0]) {
					this$1.head.push(index);
				} else {
					this$1.foot.push(index);
				}
			}
		});
	}
}

function cue(seq, i, direction, pristine) {
	var this$1 = this;

	var blocked = ['head', null, 'foot'][1 + direction];
	var nextId = seq.members[i + direction];
	var nextElement = this.store.elements[nextId];

	seq.blocked[blocked] = true;

	setTimeout(function () {
		seq.blocked[blocked] = false;
		if (nextElement) {
			sequence.call(this$1, nextElement, pristine);
		}
	}, seq.interval);
}

function initialize() {
	var this$1 = this;

	rinse.call(this);

	each(this.store.elements, function (element) {
		var styles = [element.styles.inline.generated];

		if (element.visible) {
			styles.push(element.styles.opacity.computed);
			styles.push(element.styles.transform.generated.final);
			element.revealed = true;
		} else {
			styles.push(element.styles.opacity.generated);
			styles.push(element.styles.transform.generated.initial);
			element.revealed = false;
		}

		element.node.setAttribute('style', styles.filter(function (s) { return s !== ''; }).join(' '));
	});

	each(this.store.containers, function (container) {
		var target =
			container.node === document.documentElement ? window : container.node;
		target.addEventListener('scroll', this$1.delegate);
		target.addEventListener('resize', this$1.delegate);
	});

	/**
	 * Manually invoke delegate once to capture
	 * element and container dimensions, container
	 * scroll position, and trigger any valid reveals
	 */
	this.delegate();

	/**
	 * Wipe any existing `setTimeout` now
	 * that initialization has completed.
	 */
	this.initTimeout = null;
}

function isMobile(agent) {
	if ( agent === void 0 ) agent = navigator.userAgent;

	return /Android|iPhone|iPad|iPod/i.test(agent)
}

function deepAssign(target) {
	var sources = [], len = arguments.length - 1;
	while ( len-- > 0 ) sources[ len ] = arguments[ len + 1 ];

	if (isObject(target)) {
		each(sources, function (source) {
			each(source, function (data, key) {
				if (isObject(data)) {
					if (!target[key] || !isObject(target[key])) {
						target[key] = {};
					}
					deepAssign(target[key], data);
				} else {
					target[key] = data;
				}
			});
		});
		return target
	} else {
		throw new TypeError('Target must be an object literal.')
	}
}

function reveal(target, options, syncing) {
	var this$1 = this;
	if ( options === void 0 ) options = {};
	if ( syncing === void 0 ) syncing = false;

	var containerBuffer = [];
	var sequence$$1;
	var interval = options.interval || defaults.interval;

	try {
		if (interval) {
			sequence$$1 = new Sequence(interval);
		}

		var nodes = tealight(target);
		if (!nodes.length) {
			throw new Error('Invalid reveal target.')
		}

		var elements = nodes.reduce(function (elementBuffer, elementNode) {
			var element = {};
			var existingId = elementNode.getAttribute('data-sr-id');

			if (existingId) {
				deepAssign(element, this$1.store.elements[existingId]);

				/**
				 * In order to prevent previously generated styles
				 * from throwing off the new styles, the style tag
				 * has to be reverted to its pre-reveal state.
				 */
				element.node.setAttribute('style', element.styles.inline.computed);
			} else {
				element.id = nextUniqueId();
				element.node = elementNode;
				element.seen = false;
				element.revealed = false;
				element.visible = false;
			}

			var config = deepAssign({}, element.config || this$1.defaults, options);

			if ((!config.mobile && isMobile()) || (!config.desktop && !isMobile())) {
				if (existingId) {
					clean.call(this$1, element);
				}
				return elementBuffer // skip elements that are disabled
			}

			var containerNode = tealight(config.container)[0];
			if (!containerNode) {
				throw new Error('Invalid container.')
			}
			if (!containerNode.contains(elementNode)) {
				return elementBuffer // skip elements found outside the container
			}

			var containerId;
			{
				containerId = getContainerId(
					containerNode,
					containerBuffer,
					this$1.store.containers
				);
				if (containerId === null) {
					containerId = nextUniqueId();
					containerBuffer.push({ id: containerId, node: containerNode });
				}
			}

			element.config = config;
			element.containerId = containerId;
			element.styles = style(element);

			if (sequence$$1) {
				element.sequence = {
					id: sequence$$1.id,
					index: sequence$$1.members.length
				};
				sequence$$1.members.push(element.id);
			}

			elementBuffer.push(element);
			return elementBuffer
		}, []);

		/**
		 * Modifying the DOM via setAttribute needs to be handled
		 * separately from reading computed styles in the map above
		 * for the browser to batch DOM changes (limiting reflows)
		 */
		each(elements, function (element) {
			this$1.store.elements[element.id] = element;
			element.node.setAttribute('data-sr-id', element.id);
		});
	} catch (e) {
		return logger.call(this, 'Reveal failed.', e.message)
	}

	/**
	 * Now that element set-up is complete...
	 * Let’s commit any container and sequence data we have to the store.
	 */
	each(containerBuffer, function (container) {
		this$1.store.containers[container.id] = {
			id: container.id,
			node: container.node
		};
	});
	if (sequence$$1) {
		this.store.sequences[sequence$$1.id] = sequence$$1;
	}

	/**
	 * If reveal wasn't invoked by sync, we want to
	 * make sure to add this call to the history.
	 */
	if (syncing !== true) {
		this.store.history.push({ target: target, options: options });

		/**
		 * Push initialization to the event queue, giving
		 * multiple reveal calls time to be interpreted.
		 */
		if (this.initTimeout) {
			window.clearTimeout(this.initTimeout);
		}
		this.initTimeout = window.setTimeout(initialize.bind(this), 0);
	}
}

function getContainerId(node) {
	var collections = [], len = arguments.length - 1;
	while ( len-- > 0 ) collections[ len ] = arguments[ len + 1 ];

	var id = null;
	each(collections, function (collection) {
		each(collection, function (container) {
			if (id === null && container.node === node) {
				id = container.id;
			}
		});
	});
	return id
}

/**
 * Re-runs the reveal method for each record stored in history,
 * for capturing new content asynchronously loaded into the DOM.
 */
function sync() {
	var this$1 = this;

	each(this.store.history, function (record) {
		reveal.call(this$1, record.target, record.options, true);
	});

	initialize.call(this);
}

var polyfill = function (x) { return (x > 0) - (x < 0) || +x; };
var mathSign = Math.sign || polyfill

/*! @license miniraf v1.0.0

	Copyright 2018 Fisssion LLC.

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.

*/
var polyfill$1 = (function () {
	var clock = Date.now();

	return function (callback) {
		var currentTime = Date.now();
		if (currentTime - clock > 16) {
			clock = currentTime;
			callback(currentTime);
		} else {
			setTimeout(function () { return polyfill$1(callback); }, 0);
		}
	}
})();

var index = window.requestAnimationFrame ||
	window.webkitRequestAnimationFrame ||
	window.mozRequestAnimationFrame ||
	polyfill$1;

function getGeometry(target, isContainer) {
	/**
	 * We want to ignore padding and scrollbars for container elements.
	 * More information here: https://goo.gl/vOZpbz
	 */
	var height = isContainer ? target.node.clientHeight : target.node.offsetHeight;
	var width = isContainer ? target.node.clientWidth : target.node.offsetWidth;

	var offsetTop = 0;
	var offsetLeft = 0;
	var node = target.node;

	do {
		if (!isNaN(node.offsetTop)) {
			offsetTop += node.offsetTop;
		}
		if (!isNaN(node.offsetLeft)) {
			offsetLeft += node.offsetLeft;
		}
		node = node.offsetParent;
	} while (node)

	return {
		bounds: {
			top: offsetTop,
			right: offsetLeft + width,
			bottom: offsetTop + height,
			left: offsetLeft
		},
		height: height,
		width: width
	}
}

function getScrolled(container) {
	var top, left;
	if (container.node === document.documentElement) {
		top = window.pageYOffset;
		left = window.pageXOffset;
	} else {
		top = container.node.scrollTop;
		left = container.node.scrollLeft;
	}
	return { top: top, left: left }
}

function isElementVisible(element) {
	if ( element === void 0 ) element = {};

	var container = this.store.containers[element.containerId];
	if (!container) { return }

	var viewFactor = Math.max(0, Math.min(1, element.config.viewFactor));
	var viewOffset = element.config.viewOffset;

	var elementBounds = {
		top: element.geometry.bounds.top + element.geometry.height * viewFactor,
		right: element.geometry.bounds.right - element.geometry.width * viewFactor,
		bottom: element.geometry.bounds.bottom - element.geometry.height * viewFactor,
		left: element.geometry.bounds.left + element.geometry.width * viewFactor
	};

	var containerBounds = {
		top: container.geometry.bounds.top + container.scroll.top + viewOffset.top,
		right: container.geometry.bounds.right + container.scroll.left - viewOffset.right,
		bottom:
			container.geometry.bounds.bottom + container.scroll.top - viewOffset.bottom,
		left: container.geometry.bounds.left + container.scroll.left + viewOffset.left
	};

	return (
		(elementBounds.top < containerBounds.bottom &&
			elementBounds.right > containerBounds.left &&
			elementBounds.bottom > containerBounds.top &&
			elementBounds.left < containerBounds.right) ||
		element.styles.position === 'fixed'
	)
}

function delegate(
	event,
	elements
) {
	var this$1 = this;
	if ( event === void 0 ) event = { type: 'init' };
	if ( elements === void 0 ) elements = this.store.elements;

	index(function () {
		var stale = event.type === 'init' || event.type === 'resize';

		each(this$1.store.containers, function (container) {
			if (stale) {
				container.geometry = getGeometry.call(this$1, container, true);
			}
			var scroll = getScrolled.call(this$1, container);
			if (container.scroll) {
				container.direction = {
					x: mathSign(scroll.left - container.scroll.left),
					y: mathSign(scroll.top - container.scroll.top)
				};
			}
			container.scroll = scroll;
		});

		/**
		 * Due to how the sequencer is implemented, it’s
		 * important that we update the state of all
		 * elements, before any animation logic is
		 * evaluated (in the second loop below).
		 */
		each(elements, function (element) {
			if (stale) {
				element.geometry = getGeometry.call(this$1, element);
			}
			element.visible = isElementVisible.call(this$1, element);
		});

		each(elements, function (element) {
			if (element.sequence) {
				sequence.call(this$1, element);
			} else {
				animate.call(this$1, element);
			}
		});

		this$1.pristine = false;
	});
}

function transformSupported() {
	var style = document.documentElement.style;
	return 'transform' in style || 'WebkitTransform' in style
}

function transitionSupported() {
	var style = document.documentElement.style;
	return 'transition' in style || 'WebkitTransition' in style
}

var version = "4.0.5";

var boundDelegate;
var boundDestroy;
var boundReveal;
var boundClean;
var boundSync;
var config;
var debug;
var instance;

function ScrollReveal(options) {
	if ( options === void 0 ) options = {};

	var invokedWithoutNew =
		typeof this === 'undefined' ||
		Object.getPrototypeOf(this) !== ScrollReveal.prototype;

	if (invokedWithoutNew) {
		return new ScrollReveal(options)
	}

	if (!ScrollReveal.isSupported()) {
		logger.call(this, 'Instantiation failed.', 'This browser is not supported.');
		return mount.failure()
	}

	var buffer;
	try {
		buffer = config
			? deepAssign({}, config, options)
			: deepAssign({}, defaults, options);
	} catch (e) {
		logger.call(this, 'Invalid configuration.', e.message);
		return mount.failure()
	}

	try {
		var container = tealight(buffer.container)[0];
		if (!container) {
			throw new Error('Invalid container.')
		}
	} catch (e) {
		logger.call(this, e.message);
		return mount.failure()
	}

	config = buffer;

	if ((!config.mobile && isMobile()) || (!config.desktop && !isMobile())) {
		logger.call(
			this,
			'This device is disabled.',
			("desktop: " + (config.desktop)),
			("mobile: " + (config.mobile))
		);
		return mount.failure()
	}

	mount.success();

	this.store = {
		containers: {},
		elements: {},
		history: [],
		sequences: {}
	};

	this.pristine = true;

	boundDelegate = boundDelegate || delegate.bind(this);
	boundDestroy = boundDestroy || destroy.bind(this);
	boundReveal = boundReveal || reveal.bind(this);
	boundClean = boundClean || clean.bind(this);
	boundSync = boundSync || sync.bind(this);

	Object.defineProperty(this, 'delegate', { get: function () { return boundDelegate; } });
	Object.defineProperty(this, 'destroy', { get: function () { return boundDestroy; } });
	Object.defineProperty(this, 'reveal', { get: function () { return boundReveal; } });
	Object.defineProperty(this, 'clean', { get: function () { return boundClean; } });
	Object.defineProperty(this, 'sync', { get: function () { return boundSync; } });

	Object.defineProperty(this, 'defaults', { get: function () { return config; } });
	Object.defineProperty(this, 'version', { get: function () { return version; } });
	Object.defineProperty(this, 'noop', { get: function () { return false; } });

	return instance ? instance : (instance = this)
}

ScrollReveal.isSupported = function () { return transformSupported() && transitionSupported(); };

Object.defineProperty(ScrollReveal, 'debug', {
	get: function () { return debug || false; },
	set: function (value) { return (debug = typeof value === 'boolean' ? value : debug); }
});

ScrollReveal();

return ScrollReveal;

})));
  </script>

  {{-- guide video script =-- (start)--> --}}
  <script>
    var vid = document.getElementById("guideVideo");
    function playVid() { vid.play(); }
    function pauseVid() { vid.pause(); }
    </script>
  {{-- guide video script <--(end)--= --}}
  
  {{-- progress script =-- (start)--> --}}
  <script>
    $(document).ready(function () {
        $(window).on("scroll", function () {
            $(".progress").each(function (index, progress) {
              var progressBar = $(progress).find(".progress-bar");
              var progressPercent = parseInt($(progressBar).attr("data-progress"));
              if ( $(window).scrollTop() > $(progressBar).offset().top -400 ) {
                $(progressBar).css("width", progressPercent + "%").text(progressPercent + "%")
              }
            });
          });
        });
        </script>
    {{-- progress script <--(end)--= --}}
    
    
    {{-- ScrollReveal script =-- (start)--> --}}
    <script>
      // header
      ScrollReveal().reveal('.republic', {
        duration: 1000,
        origin: 'top',
        distance: '75px',
      });
      ScrollReveal().reveal('#login-section .col-md-7', {
        duration: 1500,
        origin: 'left',
        distance: '75px',
      });
      ScrollReveal().reveal('#login-section .col-md-7 .btn', {
        duration: 3000,
        origin: 'left',
        distance: '75px',
      });
      ScrollReveal().reveal('#login-section .col-md-5', {
        duration: 1500,
        origin: 'right',
        distance: '75px',
      });
      // team
      ScrollReveal().reveal('#team-section h1', {
          duration: 3000,
          origin: 'top',
            distance: '75px',
          });
        ScrollReveal().reveal('#team-section h4', {
          duration: 3000,
          origin: 'top',
            distance: '100px',
          });
      ScrollReveal().reveal('.team .col4', {
        duration: 1300,
        origin: 'bottom',
        distance: '200px',
      });
      ScrollReveal().reveal('.team .col3', {
        duration: 2500,
        origin: 'bottom',
        distance: '200px',
      });
      ScrollReveal().reveal('.team .col2', {
        duration: 4000,
        origin: 'bottom',
        distance: '200px',
      });
      ScrollReveal().reveal('.team .col1', {
        duration: 6000,
        origin: 'bottom',
        distance: '200px',
      });

      // guide
      ScrollReveal().reveal('.card-deck .card1', {
        duration: 2500,
        origin: 'left',
        distance: '100px',
      });
      ScrollReveal().reveal('.card-deck .card2', {
        duration: 2500,
        origin: 'right',
        distance: '100px',
      });
      
      // skill
      ScrollReveal().reveal('#skill-section h1', {
          duration: 3000,
          origin: 'top',
            distance: '50px',
          });
        ScrollReveal().reveal('#skill-section h4', {
          duration: 3000,
          origin: 'top',
            distance: '50px',
          });

      ScrollReveal().reveal('.skill', {
        duration: 1300,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill1', {
        duration: 1300,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill2', {
        duration: 1000,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill3', {
        duration: 1500,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill4', {
        duration: 2000,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill5', {
        duration: 2500,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill6', {
        duration: 3000,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill7', {
        duration: 3500,
        origin: 'bottom',
        distance: '50px',
      });
      ScrollReveal().reveal('.skill8', {
        duration: 4000,
        origin: 'bottom',
        distance: '50px',
      });
      
      // contact
      ScrollReveal().reveal('#contact-section', {
        duration: 3000,
        origin: 'left',
          distance: '100px',
        });
        
        // footer
        ScrollReveal().reveal('#footer-section h1', {
          duration: 3000,
          origin: 'top',
            distance: '100px',
          });
        ScrollReveal().reveal('#footer-section h4', {
          duration: 3000,
          origin: 'top',
            distance: '100px',
          });
        ScrollReveal().reveal('#footer-section .footer1', {
          duration: 3000,
          origin: 'left',
            distance: '100px',
          });
        ScrollReveal().reveal('#footer-section .footer2', {
          duration: 3000,
          origin: 'top',
            distance: '100px',
          });
        ScrollReveal().reveal('#footer-section .footer3', {
          duration: 3000,
          origin: 'right',
            distance: '100px',
          });
        ScrollReveal().reveal('#footer-section .footer-copyright', {
          duration: 5000,
          origin: 'bottom',
            distance: '100px',
          });
        
        
      </script>


    {{-- ScrollReveal script <--(end)--= --}}
    
</body>

</html>