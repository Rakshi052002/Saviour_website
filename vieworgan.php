<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result=mysqli_query($mysqli, "SELECT * FROM donationdetails");
?>
<html>
<head>
    <style>
        body{
            background: url("uploads/admindash.webp");
    background-repeat: no-repeat;
    background-size: cover;
        }
        </style>
<title>Organ details</title>
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
                                <a class="dropdown-item" href="viewvacc.php">View vaccination details</a>
                                <a class="dropdown-item" href="viewblood.php">View blood details</a>
                                <a class="dropdown-item" href="vieworgan.php">View organ details</a>
                                <a class="dropdown-item" href="updatevacc.php">Update Vaccination details</a>
                                <a class="dropdown-item" href="updateblood.php">Update blood details</a>
                                <a class="dropdown-item" href="updateorgan.php">Update organ details</a>
                            </div>
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
        </div><br><br>
<hr />
<h1 align="center"> Living donor Bookings</h1>
<table width='100%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Name</td>
<td>State</td>
<td>Center</td>
<td>Donation type</td>
<td>Date of Donation</td>
<td>Time slot</td>
<td>Age</td>
<td>Gender</td>
<td>Medical Report</td>
<td>Phone number</td>
</tr>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['Name']."</td>";
echo "<td>".$res['State']."</td>";
echo "<td>".$res['Center']."</td>";
echo "<td>".$res['donationtype']."</td>";
echo "<td>".$res['Dod']."</td>";
echo "<td>".$res['Tod']."</td>";
echo "<td>".$res['Age']."</td>";
echo "<td>".$res['Gender']."</td>";
echo "<td>".$res['Medicalreport']."</td>";
echo "<td>".$res['Phoneno']."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result=mysqli_query($mysqli, "SELECT * FROM deaddonationdetails");
?>
<html>
<head>
</head>
<body>
<h1 align="center"> Dead donor Bookings</h1>
<hr />
<table width='100%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Name</td>
<td>State</td>
<td>Center</td>
<td>Donation type</td>
<td>Date of Donation</td>
<td>Time slot</td>
<td>Age</td>
<td>Gender</td>
<td>Phone number</td>
</tr>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['Name']."</td>";
echo "<td>".$res['State']."</td>";
echo "<td>".$res['Center']."</td>";
echo "<td>".$res['donationtype']."</td>";
echo "<td>".$res['Dod']."</td>";
echo "<td>".$res['Tod']."</td>";
echo "<td>".$res['Age']."</td>";
echo "<td>".$res['Gender']."</td>";
echo "<td>".$res['Phoneno']."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result=mysqli_query($mysqli, "SELECT * FROM organupdate");
?>
<html>
<head>
</head>
<body>

<h1 align="center"> Donation Availability</h1>
<hr />
<table width='100%' border=0>
<tr bgcolor='#CCCCCC'>
<td>Center</td>
<td>Time slot</td>
<td>Bed Available</td>
</tr>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['Center']."</td>";
echo "<td>".$res['Timeslot']."</td>";
echo "<td>".$res['Available']."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>