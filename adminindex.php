<!DOCTYPE html>
<html lang="en">
<head>
  <title>Savior-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/userpage.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/main-js.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <style>
        body{
            background-image: url('uploads/admindash.webp');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
        }
        .card{
            box-shadow: 4px 4px 8px 8px rgb(204, 229, 255);
        }
        button{
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
button:hover{
  opacity: 0.7;
  color:black;
}
        </style>
    <script>
        function product(){
            location.replace('viewvacc.php');
        }
        function product1(){
            location.replace('viewblood.php');
        }
        function product2(){
            location.replace('vieworgan.php');
        }
        function product3(){
            location.replace('updatevacc.php');
        }
        function product4(){
            location.replace('updateblood.php');
        }
        function product5(){
            location.replace('updateorgan.php');
        }
    </script>

</head>
<body>
<div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-dark fixed-top">
                <img style="width:5%"src="uploads/logo1.jpeg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3
"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="login.php">User Login</a>
                                <a class="dropdown-item" href="login.php">User Logout</a>
                                <a class="dropdown-item" href="register.php">Register</a>
                                <a class="dropdown-item" href="loginadmin.php">Admin Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container" style=" padding-top:15%">
  <CENTER><h2>ADMIN DASHBOARD</h2></CENTER>
  <div class="card-columns">
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/vacc.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <p class="card-text">Vaccination bookings and availablity</p>
        <button onclick="product()">VIEW</button>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/ordo2.webp" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <p class="card-text">Update Organ Donation Details</p>
        <button onclick="product5()">UPDATE</button>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/blodo.jpg" class="img-thumbnail" alt="Cinque Terre" width="270" height="136"> 
        <p class="card-text">Blood Donation Bookings and availability</p>
        <button onclick="product1()">VIEW</button>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/vacc.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
        <p class="card-text">Update Vaccination Details</p>
        <button onclick="product3()">UPDATE</button>
      </div>
    </div>  
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/o.jpg" class="img-thumbnail" alt="Cinque Terre" width="500" height="136"> 
        <p class="card-text">Organ Donation Bookings and availability</p>
        <button onclick="product2()">VIEW</button>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
      <img src="uploads/bld.jpg" class="img-thumbnail" alt="Cinque Terre" width="230" height="136"> 
        <p class="card-text">Update Blood Donation Details</p>
        <button onclick="product4()">UPDATE</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>