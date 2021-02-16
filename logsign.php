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
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Vendor CSS Files
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <style>
       *{
  margin: 0;
  padding: 0;
}

body{
  background: #e9eaea;
  font-family: roboto;
  user-select: none;
}

.containerr{
  width: 450px;
  margin-top: 60px;
  margin: 6rem auto;
  /* position: relative;
  left: 1rem;
  top: 8rem; */
}

.signup,
.login{
  width: 50%;
  background: #fff;
  float: left;
  height: 60px;
  line-height: 60px;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
}

.signup-form,
.login-form{
  background: #fff;
  padding: 40px;
  clear: both;
  width: 100%;
  box-sizing: border-box;
  height: 400px;
}

.input{
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  margin-bottom: 25px;
  border: 2px solid #e9eaea;
  color: #3e3e40;
  font-size: 14px;
  outline: none;
  transform: all 0.5s ease;
}

.input:focus{
  border: 2px solid #136155;
}

.btn{
  width: 100%;
  background: #34b3a0;
  height: 60px;
  text-align: center;
  line-height: 60px;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  letter-spacing: 1px;
  cursor: pointer;
  margin-bottom: 30px;
}

span a{
  text-decoration: none;
  color: #000;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #3e3e40;
  font-family: roboto;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #3e3e40;
  font-family: roboto;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #3e3e40;
  font-family: roboto;
}
:-moz-placeholder { /* Firefox 18- */
  color: #3e3e40;
  font-family: roboto;
}


          footer{
        background-color: #333;
        color: #f1f1f1;
        /* position: relative;
        top: 1rem; */
      }
      footer a{
        color: #f1f1f1;
      }
      #heddd{
        list-style: none;
      }
#sii,#logg{
  background:#fff;
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
                            
                              if(isset($_SESSION["emailid"])){
                             
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
        

  
    <div class="wrapper">
      <div class="containerr">
        
        <div class="signup">Sign Up</div>
        <div class="login">Log In</div>
        <form action="./insert.php" method="POST">
         <div class="signup-form">
            <input type="text" name="email" placeholder="Name" class="input"><br />
            <input type="text" name="phone" placeholder="phoneno" class="input"><br />
            <input type="password" name="pass" placeholder="Password" class="input"><br />
            <input type="submit" name="submit" placeholder="signup" id ="sii" class="input"><br />
          
         </div>
		 </form>

 


        <form action="./login.php" method="POST">
        <div class="login-form">
            <input type="text" name="email"  placeholder="Name" class="input"><br />
            <input type="password" name = "pass" name placeholder="Password" class="input"><br />
			            <input type="submit" name="login" placeholder="login" id="logg" class="input"><br />

         </div>
		 </form>
		

 
     </div>
    </div>
  </form>

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
<script>
$(".login-form").hide();
$(".login").css("background", "none");

$(".login").click(function(){
  $(".signup-form").hide();
  $(".login-form").show();
  $(".signup").css("background", "none");
  $(".login").css("background", "#fff");
});

$(".signup").click(function(){
  $(".signup-form").show();
  $(".login-form").hide();
  $(".login").css("background", "none");
  $(".signup").css("background", "#fff");
});

$(".btn").click(function(){
  $(".input").val("");
});
</script>



          </script>
        
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
