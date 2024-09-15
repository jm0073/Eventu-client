<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link href="css/style.css" rel="stylesheet">

  <title>
    Eventu
  </title>
  <link rel="icon" type="image/x-icon" href="/uploadimages/Eventu.ico">

</head>
<body>
  <section style="background-image: url('images/f3.jpg');background-size:100%;">
    <?php include 'header.php'; ?>
    <section class="first" data-aos="fade-up">
      <div class="center-content">
        <h1>EVENTU</h1>
        <span id="typed-text"></span>
      </div>  
    </section>
  </section>


<section style="background-color:black">
  <section class="second" style="background-color: black; background-size: 100%" data-aos="fade-up">
    <h2 style="color: white; margin-left: 20px; margin-top: 0px;">UPCOMING EVENTS</h2>
    <div id="upcomingEventsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="uploadimages/ff2.jpg" class="d-block w-25 mx-auto" alt="TFF">
                <div class="carousel-caption">
                    <h2>TFF</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploadimages/izhaar.jpg" class="d-block w-25 mx-auto" alt="Izhaar">
                <div class="carousel-caption">
                    <h2>Izhaar</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploadimages/mudra.jpg" class="d-block w-25 mx-auto" alt="Mudranite">
                <div class="carousel-caption">
                    <h2>Mudranite</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploadimages/sat2.jpg" class="d-block w-25 mx-auto" alt="Saturnalia">
                <div class="carousel-caption">
                    <h2>Saturnalia</h2>
                </div>
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#upcomingEventsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#upcomingEventsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



  <!-- Past events carousel -->
  <section class="third" style="background-color: black; background-size: 100%" data-aos="fade-up">
    <h2 style="color: white; margin-left: 20px; margin-top: 0px; ">PAST EVENTS</h2>
    <div id="pastEventsCarousel" class="carousel slide" data-ride="carousel" style="max-width: 800px; margin: auto;">
      <div class="carousel-inner">
       
        <div class="carousel-item">
          <img src="uploadimages/halo.jpg" class="d-block w-75 mx-auto" alt="Past Event 2">
          <div class="carousel-caption">
            <h2>Halloween Night</h2>
            <p>TAAS x Saturnalia presented a movie screening on the eeriest night of the year- Halloween, featuring the movie "Life." An Unearthly evening filled with extraterrestrial wonders and haunted starships.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="uploadimages/garba.jpg" class="d-block w-75 mx-auto" alt="Past Event 3">
          <div class="carousel-caption">
            <h2>Garba Night</h2>
          </div>
        </div>

        <div class="carousel-item active">
          <img src="images/a1.jpg" class="d-block w-75 mx-auto" alt="Past Event 1">
          <div class="carousel-caption">
            <h2>Surnite'23</h2>
            <p>Incredible evening filled with soulful singing and enthralling beats captivating both heart and mind.</p>
          </div>
        </div>
        <!-- Add more carousel items as needed -->
      </div>
      <a class="carousel-control-prev" href="#pastEventsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#pastEventsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
</section>
<div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">
                <div class="error"></div>
                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    
                    <input id="userName" class="form-control" type="text" placeholder="Username" name="Username">
                    <br>
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <br>
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <br>
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <br>
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to 
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>        
          </div>
        </div>
      </div>


<!-- <hr style="border-top: 1px solid white; margin-top: 0;"> -->


  <?php include 'footer.php'; ?>

 
  <script src="js/main.js"></script>
  <script>
    AOS.init();
  </script>
 
  <script src="typing-effect.js"></script>
  <script>
    var options = {
      strings: ["Welcome to our Event Management Website.", "Plan, Execute, and Celebrate with us."],
      typeSpeed: 50,
      backSpeed: 25,
      backDelay: 1500,
      startDelay: 500,
      loop: true,
    };

    var typed = new Typed("#typed-text", options);
  </script>
</body>
</html>
