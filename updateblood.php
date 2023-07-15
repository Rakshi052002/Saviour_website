<html>
<head>
<title>update service availability</title>
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
                    <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin Categories</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="viewvacc.php"><i ></i>View vaccination details</a>
                                <a class="dropdown-item" href="viewblood.php"><i></i>View blood details</a>
                                <a class="dropdown-item" href="vieworgan.php"><i ></i>View organ details</a>
                                <a class="dropdown-item" href="updatevacc.php"><i ></i>Update Vaccination details</a>
                                <a class="dropdown-item" href="updateblood.php"><i ></i>Update blood details</a>
                                <a class="dropdown-item" href="updateorgan.php"><i ></i>Update organ details</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>User Login</a>
                                <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>User Logout</a>
                                <a class="dropdown-item" href="register.php"><i class="fas fa-power-off mr-2"></i>Register</a>
                                <a class="dropdown-item" href="loginadmin.php"><i class="fas fa-sign-in-alt mr-2"></i>Admin Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update'])){ 
$Center= $_POST['Center'];
$Timeslot = $_POST['Timeslot'];
$Available = $_POST['Available'];
//updating the table
$result = mysqli_query($mysqli, "UPDATE `bloodupdate` SET Available='$Available' WHERE Center='$Center' and Timeslot='$Timeslot'");
header('Location:viewblood.php');
}
?>
</body>
</html>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>  
.up{
    padding-top: 10%;
  width: 35%;
  padding: 50px;
  margin: 100px;
  box-shadow: 4px 4px 8px 8px rgb(1, 29,105);
  position: fixed;

}
body{
    background: url("uploads/admindash.webp");
    background-repeat: no-repeat;
    background-size: cover;
}
.lo{
    border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color:rgb(63,139,233);
  text-align: center;
  cursor: pointer;
  width: 90%;
  font-size: 18px;
}
.user,.pass{
    border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: rgb(239, 239, 239);
  width: 100%;
  font-size: 18px;
}

h1{
    padding-top: 1%;
    color: blue;
    font-size:x-large;
    text-align:center;
}
</style>  
</head>    
<body>  
    <form style="margin-left: 39%;" method="post" action="updateblood.php" class="up">  
        <div class="container">
            <h1>UPDATE AVAILABILITY </h1>
            <input type="text" placeholder="Enter Center" name="Center" class="user"required>  <br><br>
            <input type="text" placeholder="enter Vacctionation type" name="Timeslot" class="pass" required>  <br><br>
            <input type="text" placeholder="enter availability" name="Available" class="pass" required><br><br>
            <input type="submit" class="lo" value ="update" name="update"><br><br>
           
    </form>    
</body>    
</html>