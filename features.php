<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ride.in</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="img/logo2.jpg" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
          footer{
        background-color: #333;
        color: #f1f1f1;
        position:static;
        bottom: 0;
      }
      footer a{
        color: #f1f1f1;
      }
      #heddd{
        list-style: none;
      }

  </style>  

</head>
<body>
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">
  
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="main.html">Ride.in</a></h1>
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
        </nav>
  
      </div>
    </header>
            <section id="services" class="services">
            <div class="container">
      
              <div class="section-title" data-aos="zoom-out">
                <h2>Services</h2>
                <p>What we do offer</p>
              </div>
      
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="icon-box" data-aos="zoom-in-left">
                    <div class="icon"><img src="img/Features/enterta.webp" height="70px" width="70px"></i></div>
                    <h4 class="title"><a href="">Entertainment</a></h4>
                    <p class="description">Listen to your favourite music, watch your favourite TV shows & movies while your amazing ride.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                  <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                    <div class="icon"><img src="img/Features/pocket friendly.jpg" height="70px" width="70px"></i></div>
                    <h4 class="title"><a href="">Pocket Friendly Rides</a></h4>
                    <p class="description">Book Cabs at affordable rates.</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                  <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                    <div class="icon"><img src="img/Features/247.png" height="70px" width="70px"></div>
                    <h4 class="title"><a href="">24*7</a></h4>
                    <p class="description">Late night parties, family function or night out with friends book your ride at your preferred time.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                  <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                    <div class="icon"><img src="img/Features/Safety for women.jpg" height="70px" width="70px"></div>
                    <h4 class="title"><a href="">Safety for women</a></h4>
                    <p class="description">In order to ensure a hassle-free and safe ride, we provide special features for our lady passengers.</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 mt-5">
                  <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                    <div class="icon"><img src="img/Features/Free Wifi (1).jpg" height="70px" width="70px"></div>
                    <h4 class="title"><a href="">Free Wifi</a></h4>
                    <p class="description">No worries with network issues while ride, always stay connected with Ride.in's free Wi-Fi.                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                  <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
                    <div class="icon"><img src="img/Features/In-app messenger.png" height="70px" width="70px"></div>
                    <h4 class="title"><a href="">In App Messenger</a></h4>
                    <p class="description">Communicate with your cab driver, within the application.</p>
                  </div>
                </div>
              </div>
      
            </div>
          </section>
        </div>
      </section>

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

        
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/venobox/venobox.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
    
      
      <script src="assets/js/main.js"></script>
    
</body>
</html>
