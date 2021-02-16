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
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->


  <link href="forms.scss" rel="stylesheet/scss" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

  <style>
        body{
          background-color: white;
          /* background-image: url("img/imag1.jpg"); */
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
        top: 70rem;
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
      body {
    background: #a1ceec;
    background: -webkit-linear-gradient(to right, #e8cbc0, #b7c0e7);
    background: linear-gradient(to right, #e8cbc0, #acb8ee);
    min-height: 100vh;
}

.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
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
  <!-- End Header -->
<br>
<br>
<br>



  <!--start  teams  -->
<!-- For demo purpose -->
<div class="container py-5">
  <div class="row text-center text-white">
      <div class="col-lg-8 mx-auto">
          <!-- <h1 class="display-4">Team Page</h1> -->
          <p class="lead mb-0">We as a team developed a site where user can book rides and enjoy it with amazing experience.</p>
             </p>
      </div>
  </div>
</div><!-- End -->


<div class="container">
  <div class="row text-center">

      <!-- Team item -->
      <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/team/Sakshi.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Sakshi Kodarlikar</h5><span class="small text-uppercase text-muted"></span>
              <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="https://www.facebook.com/sakshi.kodarlikar/" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/saskodarlikar" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/sas_kodarlikar_/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div><!-- End -->

      <!-- Team item -->
      <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/team/Gandhar.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Gandhar Khandagale</h5><span class="small text-uppercase text-muted"></span>
              <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div><!-- End -->

      <!-- Team item -->
      <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/team/Shruti.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Shruti Marathe</h5><span class="small text-uppercase text-muted"></span>
              <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div><!-- End -->

      <!-- Team item -->
      <!-- <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
              <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div>End -->
  </div>
</div>

  <!-- end teams -->
  <!-- </main> -->
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
  <!-- <script src="assets/js/team.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/main.js"></script> -->

</body>

</html>