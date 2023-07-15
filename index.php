<!doctype html>
<html lang="en">
 
<head>
<?php

include_once('config.php');

session_start();

if(!isset($_SESSION['username'])){
   header('location:login.php');
}

?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Saviour-Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <script>
        function product(){
            location.replace('vaccination.html');
        }
        function product1(){
            location.replace('blooddonation.html');
        }
        function product2(){
            location.replace('donation.html');
        }
    </script>
    <style>
* {
  box-sizing: border-box;
}

img{
    width:100%;
  height:150%;
  margin-top: 0%;
  margin-left: 0%;
  margin-bottom: 0%;
  margin-right: 0%
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 45px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.vaccination,.BloodDonation,.OrganDonation,.BloodandOrganAvailable {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  background-color:black;
}
.vaccination button,.BloodDonation button,.OrganDonation button,.BloodandOrganAvailable button{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color:rgb(189,145,222);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.vaccination button:hover,.BloodDonation button:hover,.OrganDonation button:hover,.BloodandOrganAvailable button:hover{
  opacity: 0.7;
  color:black;
}
.button{
            color:black;
            border:2px solid black;
            text-decoration: none;
            position: relative;
            left:45%;
            top:60%;
            background-color: aqua;
            border: none;
            outline: 0;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
        .dashboard-main-wrapper{
            background-color:rgb(0,0,0);
        }
        .carousel-caption{
              top:35%;
              left:10%;
              color:black;
        }
        h2{
            color:rgb(189,145,222);
        }
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <img style="width:5%"src="uploads/logo1.jpeg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3
"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a href="vaccination.php">VACCINATION</a><hr>
                                <a href="blooddonation.php">BLOOD DONATION</a><hr>
                                <a href="donationhtml.php">ORGAN DONATION</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown nav-user">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="login.php">User Login</a>
                                <a class="dropdown-item" href="login.php">User Logout</a>
                                <a class="dropdown-item" href="register.php">Register</a>
                                <a class="dropdown-item" href="adminlogin.php">Admin Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- <div class="dashboard-wrapper"> -->
            <div class="container-fluid dashboard-content">    
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="d-block" src="uploads/vaccine.jpg" alt="First slide">
                                    <div class="carousel-caption">
                                  <strong>  <h1>Welcome!</h1><strong>
     <strong> <h1 style="color:blue"> <span><?php echo $_SESSION['username']; ?></span></h1><strong>
                                        <h3 class="text-black">Vaccine And Live Long</h3>
                                        <p>Vaccination is the administration of a vaccine to help the immune system develop immunity from a disease. Vaccines contain a microorganism or virus in a weakened, live or killed state, or proteins or toxins from the organism.</p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="uploads/ordo2.webp" alt="Second slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                    <h3>Welcome!</h3>
      <p> <span><?php echo $_SESSION['username']; ?></span></p>    
                                    <h3 class="text-white">Organ Donation is Importance</h3>
                                        <p>Take a minute to help those in need. Sign up as an organ, eye, and tissue donor. Every registration counts.</p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="uploads/blodo.jpg" alt="Third slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                    <h3>Welcome!</h3>
      <p> <span><?php echo $_SESSION['username']; ?></span></p>   
                                    <h3 class="text-white">Give Blood Save Life</h3>
                                        <p>Be Grateful And Donate Blood.</p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="uploads/o.jpg" alt="Fifth slide">
                                    <div class="carousel-caption d-md-block pb-5">
                                    <h3>Welcome!</h3>
      <p> <span><?php echo $_SESSION['username']; ?></span></p>    
                                    <h3 class="text-white">Need of Organ.</h3>
                                        <p>There is a wide gap between patients who need transplants and the organs that are available in India.So, we found this website</p>
                                        <a href="about.php" class="btn btn-rounded btn-outline-light">Read More</a>
                                    </div>
                                </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>   </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                   <span class="sr-only">Next</span>  </a>
                        </div>
                    </div>
                </div>
    </div><br><br><br>
                <span></span><span></span>
              <center> <h2>OUR CATEGORIES</h2></center>
<div class="row">
  <div class="column">
    <div class="vaccination">
      <img src="uploads/vaccine.jpg">
      <button onclick="product()">VACCINATION</button>
    </div>
  </div>

  <div class="column">
    <div class="BloodDonation">
      <img src="uploads/blood.jpg">
      <button onclick="product1()">BLOOD DONATION</button>
    </div>
  </div>
  
  <div class="column">
    <div class="OrganDonation">
      <img src="uploads/or.webp">
      <button onclick="product2()">ORGAN DONATION</button>
    </div>
  </div>
</div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        <!-- </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/main-js.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true, margin: 10, dots: 0, autoplay: 4000, autoplayHoverPause: true, responsive:{
                    0:{items:1}, 600:{items:2}, 1000:{items:4}
                }
            })
        });
    </script>
</body>
</html>