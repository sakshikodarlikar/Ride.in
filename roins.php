
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
      }
      footer a{
        color: #f1f1f1;
      }
      #heddd{
        list-style: none;
      }
      /* #rrr{
        position: relative;
        top: 200px;
      } */

      #roins{
        text-align:center;
        font-size:90px;
        
      }

      #coins{
        text-align:center;
        font-size:50px;
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
                                  <li><a  class=\"nav-link\" href='./logout.php'>Logout</a></li>
                                </ul>
                                ";
                                }
                            
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
        <br>
        <br>
        <br>
        <br>
          <!-- Roins Section -->
          <p id="roins">0</p>
          <p id="coins">Roins</p>
          <br>
        <br>
        <br>
        
       

          <p id="rrr">*For every Ride the User gets 4 Roins credited in their account.</p>
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
    
</body>
</html>
