<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ride.in</title>
  <link rel="shortcut icon" href="img/logo2.jpg" />

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="forms.scss" rel="stylesheet/scss" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

  <style>
        body{
          background-color: white;
          background-image: url("img/imag1.jpg");
          background-size: 100%;
          
          background-repeat: no-repeat;
          padding: 0;
          margin: 0;
      }


      a {
        color: #333;
        text-decoration: none;
      }

      img {
        width: 100%;
      }


      form{
        position: absolute;
        right: 15rem;
        bottom: 5rem;
        background-color: #b0e5e9;
        opacity: 0.9;
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 3em;
      }
      footer{
        background-color: rgb(20, 8, 8);
        color: #f1f1f1;
        width: 100%;
      }
      footer a{
        color: #f1f1f1;
      }
      #heddd{
        list-style: none;
      }
      .text-light{
        font-size: 50px;
      }
      .containerr{
        position: absolute;
        top: 45rem;
        padding: 3rem;
      }
      .ftco-footer{
        width: 100%;
      }
      #submit{
        position: relative;
        left: 2.5em;
      }
      .container{
        padding: 0;
        width: 100%;
      }
      .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #336d85;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

#pickup,#destination{
	width:150px;
	radius:0.8;
}

#pickup, #destination option{
	width:150px;
	radius:0.8;
}	
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="main.html">Ride.in</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
            <li><a href="roins.php">Roins</a></li>
            <li><a href="team.php">Team</a></li>
            <li class="active"><?php
                              // session_start();
                              if(isset($_SESSION["emailid"])){
                                // include("auth.php");
                                echo "
        
                                <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle text-center\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                ".$_SESSION['emailid']."
                                </a>";
                                if($_SESSION['emailid'] == 'Sakshi')
                                {
                                  echo "
                                  <ul class=\"dropdown-menu text-center\" aria-labelledby=\"navbarDropdown\">
                                  <li><a  class=\"nav-link\" href='./logout.php'>Logout</a></li>
                                </ul>
                                ";
                                }
                                else{
                                  echo "
                                  <ul class=\"dropdown-menu text-center\" aria-labelledby=\"navbarDropdown\">
                                  <li><a  class=\"nav-link\" href='logout.php'>Logout</a></li>
                                </ul>
                                ";
                                }
                               
                              // </li>
                                
                                
                            
                                }
                                 else{
                                echo "<a  class=\"nav-link\" href='./logsign.php'>Login</a>";
                              }
                              ?>
</li>
            
  
             </ul>
        </nav><!-- .nav-menu -->
    </div>
  </header>
  
    <form action="#" class="request-form ftco-animate">
      <!-- <h2>Make your trip</h2> -->
      <div class="form-group">
        <label for="" class="label">Pick-up location</label>
       <!-- <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> -->
	    <select name="pickup" id="pickup">
		<option value=" "></option>
		<option value="kalyan">Kalyan</option>
		<option value="dombivali">Dombivali</option>
		<option value="ghansoli">Ghansoli</option>
</select>
      </div>
      <div class="form-group">
        <label for="" class="label">Drop-off location</label>
     <!--   <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> -->
	 <select name="destination" id="destination">
		<option value=" "></option>
		<option value="kalyan">Kalyan</option>
		<option value="dombivali">Dombivali</option>
		<option value="ghansoli">Ghansoli</option>
</select>

      </div>
      <div class="form-group">
        <button id="submit" type="button" value="Book Ride " class="btn btn-primary py-3 px-4"  onclick="myFun()">Book Ride</button></a>
      </div>
		
	  
    </form>
  
  
  
  
    <div class="containerr">
      
      <div class="section-title" data-aos="zoom-out">
        <h2>Our Rides</h2>
      </div>

      <!-- new one st -->
      <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect">
            <img class="img-responsive" src="img/carroad/tata edited.jpg" alt="">
                <div class="overlay">
                    <!-- <h2>Effect 12</h2> -->
            <p>
              <a href="#">MINI</a>
              <br>
              <br>
              <br>
              <a href="#">3 Seater</a>
              <!-- <h3 style="font-family: 'Courier New', Courier, monospace;">3 Seater</h3> -->

            </p>
                </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="hovereffect">
          <img class="img-responsive" src="img/carroad/maruti suzuki.jpg" alt="">
              <div class="overlay">
                  <!-- <h2>Effect 12</h2> -->
          <p>
            <a href="#">MICRO</a>
            <br>
            <br>
            <br>
            <a href="#">4 Seater</a>
          </p>
              </div>
      </div>
    </div>
   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

      <div class="hovereffect">
        <img class="img-responsive" src="img/carroad/innova.jpg" alt="">
            <div class="overlay">
                <!-- <h2>Effect 12</h2> -->
        <p>
          <a href="#">MACRO</a>
          <br>
          <br>
          <br>
          <a href="#">6 Seater</a>
    </p>
            </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="hovereffect">
      <img class="img-responsive" src="img/carroad/sedan.jpg" alt="">
          <div class="overlay">
              <!-- <h2>Effect 12</h2> -->
      <p>
        <a href="#">SEDAN</a>
        <br>
        <br>
        <br>
        <a href="#">LUXURY</a>

      </p>
          </div>
      </div>
    </div>
  </div>
  
  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Driver &amp; Employee</h4>
                <p>
                  I  have a great experience with Ride and they pay a heafty amount.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Driver</h4>
                <p>
                  Genuine.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Driver Employee</h4>
                <p>
                  Very Good.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Professional Driver</h4>
                <p>
                  खुप छान
                </p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section>
	
  
<br>
<br>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Ride.in</h2>
            <p>Grace. Space.</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter" style="font-size:36px"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook" style="font-size:36px"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram" style="font-size:36px"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
                </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h3 class="ftco-heading-2">Links</h3>
            <ul class="list-unstyled">
                <li class="active" class="py-2 d-block"><a href="main.html">Home</a></li>
                <li><a href="features.php" class="py-2 d-block">Features</a></li>
                <li><a href="roins.php" class="py-2 d-block">Roins</a></li>
                <li><a href="team.php" class="py-2 d-block">Team</a></li>
                <li><a href="logsign.php" class="py-2 d-block">Login/Signup</a></li>
                
                
      
              </ul>
              
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul id="heddd">
                <li><i class="fa fa-map-marker" style="font-size:20px;color:rgb(255, 254, 254)"></i>
                  <span class="text">&nbsp;&nbsp;203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><i class="fa fa-phone" style="font-size:20px;color:white"></i><span class="text">&nbsp;&nbsp; +2 392 3929 210</span></a></li>
                <li><a href=""><i class="fa fa-envelope" style="font-size:20px;color:#f1f1f1"></i>
                  <span class="text">&nbsp; &nbsp;ridessg@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  submit = document.getElementById('submit');
  submit.addEventListener('click', myFun);
  
  var p,d,pickup=document.getElementById('pickup'),destination=document.getElementById('destination');

  function myFun(){
    p = pickup.value;
    d = destination.value;
    window.location.replace("http://localhost/Ride.in/book.html?&p="+p+"&d="+d);
}

</script>

</body>

</html>