<!DOCTYPE html>
<html>
<head>
<?php

include_once('config.php');

session_start();

if(!isset($_SESSION['username'])){
   header('location:login.php');
}

?>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Saviour-blooddonation</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="fonts/circular-std/style.css" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/userpage.css">
 <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
 <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
 <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.bundle.js"></script>
 <script src="js/jquery.slimscroll.js"></script>
 <script src="js/main-js.js"></script>
 <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <style>
        .nam{
            border: none;
            outline: 0;
            padding: 12px;
            color: rgb(37, 32, 32);
            background-color: rgb(239, 239, 239);
            width: 30%;
            font-size: 18px;
        }
        .place,.dis,.vatype,.da,.ti{
            border: none;
            outline: 0;
            padding: 12px;
            color: rgb(37, 32, 32);
            background-color: rgb(239, 239, 239);
            width: 30%;
            font-size: 18px;
            cursor: pointer;
        }
        .sub{
          border: none;
          outline: 0;
          padding: 12px;
          color: rgb(37, 32, 32);
          background-color:rgb(63,139,233);
          text-align: center;
          cursor: pointer;
          width: 15%;
          font-size: 18px;
        }
    body{
        background: url('uploads/bloa.gif');
        background-repeat: no-repeat;
        background-size: cover;
   }
   form{
       padding-top: 10%;
      background-color:rgba(255, 255, 255, 0.549);
      width: 70%;
      padding: 50px;
     margin: 100px;
     box-shadow: 4px 4px 8px 8px rgb(181, 27, 27);
}
#defo{
    display: none;
}
    </style>
    <script>
        function vaccinate(){
            var n=document.vacc.nam.value;
                    if(n==""){
                        document.getElementById("s1").innerHTML="ENTER A NAME";
                     }
                    else if( n.match(/\d/g)){
                        document.getElementById("s1").innerHTML="Enter a valid name";
                     }
                
                    else if(n!=""){
                        location.replace('THANK.html.');
                    }
            }
    </script>
       <script>
        $(document).ready(function(){
            $("#del").click(function(){
                $("#defo").show();
                $('#vafo').hide();
            })
        });
    </script>
</head>
    <body>

    <div class="dashboard-main-wrapper">
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
                               <a href="donationhtml.php">ORGAN DONATION</a><hr>
                           </div>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.php">About us</a
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
                               <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>User Login</a>
                               <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                               <a class="dropdown-item" href="register.php"><i class="fas fa-power-off mr-2"></i>Register</a>
                               <a class="dropdown-item" href="adminlogin.php"><i class="fas fa-power-off mr-2"></i>Admin Login</a>
                           </div>
                       </li>
                   </ul>
               </div>
           </nav>
       </div>
        <h1 style="text-align:center ;">BOOK YOUR SLOTS</h1>    
        <form name="vacc" style="margin-left: 15%;" action="blood.php" method="post" id="vafo">
        <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
        <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select class="place" name="state">
                <option>Select state</option>
                <option>TAMILNADU</option>
                <option>ANDHRAPRADESH</option>
            </select><br><br><br><br>
            <select class="dis" name="cen">
            <?php
            $result=mysqli_query($mysqli, "SELECT DISTINCT Center FROM bloodupdate");
           ?>
            <option>Select center</option>
                <?php
                while($r=mysqli_fetch_array($result)){
                    ?>
                    <option><?php echo $r['Center']; ?></option>
                    <?php                   
                }
                ?>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" class="da" name="bg"placeholder="enter your blood group" required><br><br><br><br>
            <label style="text-align:center;">Enter Basic Details</label><br><br><br>
            <input type="text" class="da"  name="age"placeholder="enter age"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="gen">
                <option>Select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select><br><br><br><br>
            <input type="text" class="da" name="phno" placeholder="Enter Your Phone Number"><br><br><br><br>
            <input type="date" class="da"name="dod" placeholder="enter date"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="tod">
                <option>Time slot</option>
                <option>9:00-11:00</option>
                <option>12:00-2:00</option>
                <option>4:00-7:00</option></select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br><br> <input type="submit" value="Submit" class="sub" name="submit"onclick="vaccinate()">
        <form name="delete"  method="post">
            <input type="button" value="Cancel Booking" name="del" class="sub" id="del" style="padding: 15px 10px;"></form>
            <form name="delform" action="dondelete.php" method="post" id="defo">
                <h1>You Can delete your info!!</h1>
            <label>Name</label>
            <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
    <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="da" name="phno" placeholder="Enter Your Phone Number"> <br><br><br><br>
            <input type="submit" value="delete" class="sub" name="submit">
    </form>
</form>
    </body>
</html>