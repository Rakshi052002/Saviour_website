<!DOCTYPE html>
<html>
<head>
<?php
        include_once("config.php");
    ?>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Saviour-Organ Donation</title>
     <!-- Bootstrap CSS -->
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
        #l1{
            background-color: rgb(15, 188, 231);
            border: none;
            color:black;
            text-align: center;
            cursor: pointer;
            font-size: 32px;
            border-radius: 10%;
            margin-left: 35%;
            margin-top: 15%;
            padding: 14px 40px;
        }
        #d1{
            background-color: rgb(15, 188, 231);
            border: none;
            color:black;
            text-align: center;
            cursor: pointer;
            font-size: 32px;
            border-radius: 10%;
            margin-left: 5%;
            padding: 14px 40px;
        }
        #l1:hover{
            box-shadow: 0 12px 16px 0 rgba(34, 5, 180, 1.5),0 17px 50px 0 rgba(44, 7, 205, 0.329);
        }
        #d1:hover{
            box-shadow: 0 12px 16px 0 rgba(34, 5, 180, 1.5),0 17px 50px 0 rgba(44, 7, 205, 0.329);
        }
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
        .mr{
            border: none;
            outline: 0;
            padding: 12px;
            color: rgb(37, 32, 32);
            background-color: rgb(239, 239, 239);
            width: 50%;
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
        background: url('uploads/ordo1.png');
        background-repeat: no-repeat;
        background-size: cover;
   }
#dead,#liv{
   display:none;
   padding-top: 10%;
      background-color:rgba(255, 255, 255, 0.549);
      width: 70%;
      padding: 50px;
     margin: 100px;
     box-shadow: 4px 4px 8px 8px rgb(221, 58, 69);
}
#bd1,#nd1,#s1{
    display: none;
} 
#defo{
    display: none;
    padding-top: 10%;
      background-color:rgba(255, 255, 255, 0.549);
      width: 70%;
      padding: 50px;
     margin: 100px;
     box-shadow: 4px 4px 8px 8px rgb(221, 58, 69);
}
#deafo{
    display: none;
    padding-top: 10%;
      background-color:rgba(255, 255, 255, 0.549);
      width: 70%;
      padding: 50px;
     margin: 100px;
     box-shadow: 4px 4px 8px 8px rgb(221, 58, 69);
}

    </style>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#l1").click(function(){
                $("#liv").show();
                $('#dead').hide();
            })
        });
        $(document).ready(function(){
            $("#d1").click(function(){
                $("#dead").show();
                $('#liv').hide();
            })
        });
    </script>
    <script>
        function show1(){
  document.getElementById('bd1').style.display ='block';
  document.getElementById('nd1').style.display ='none';
}
function show2(){
  document.getElementById('nd1').style.display = 'block';
  document.getElementById('bd1').style.display ='none';
}

    </script>
     <script>
        $(document).ready(function(){
            $("#del2").click(function(){
                $("#defo").show();
                $('#dead').hide();
            })
        });
        $(document).ready(function(){
            $("#del1").click(function(){
                $("#deafo").show();
                $('#liv').hide();
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
        <form name="butt">
            <input type="button" value="Living donor" id="l1">
            <input type="button" value="dead donor" id="d1">
        </form>  
        <form id="liv" style="margin-left: 15%;" action="donation.php" method="post">
        <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
        <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select class="place" name="state">
                <option>Select state</option>
                <option>TAMILNADU</option>
                <option>ANDHRAPRADESH</option>
            </select><br><br><br><br>
            <select class="dis" name="cen">
            <?php
            $result=mysqli_query($mysqli, "SELECT DISTINCT Center FROM organupdate");
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
            <select class="vatype" name="dontype">
                <option>Select the donation type</option>
                <option>Liver</option>
                <option>Kidney</option>
            </select><br><br><br><br>
            <input type="text" class="da" name="phno" placeholder="Enter Your Phone Number"><br><br><br><br>
            <label style="text-align:center;">SELECT DATE AND TIME FOR donation</label><br><br><br>
            <input type="date" class="da" required name="dod">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="tod">
                <option>Time slot</option>
                <option>9:00-11:00</option>
                <option>12:00-2:00</option>
                <option>4:00-7:00</option</select><br><br><br><br>
            <label style="text-align:center;">Enter Basic details</label><br><br><br>
            <input type="text" class="da" placeholder="Enter your Age"required name="age">&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="gen">
                <option>Select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select><br><br>
            <select class="mr" name="det">
                <option>Whether you have a medical report for the donationg organ ?</option>
                <option>YES</option>
                <option>NO</option>
            </select><br><br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Submit" class="sub" name="submit" >
            <form name="delete"  method="post">
                <input type="button" value="Cancel Booking" name="del" class="sub" id="del1" style="padding: 13px 10px;"></form>
                <form name="delform" action="dodelete.php" method="post" id="deafo">
                    <h1>You Can delete your info!!</h1>
                <label>Name</label>
                <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
        <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="da" name="phno" placeholder="Enter Your Phone Number"> <br><br><br><br>
                <input type="submit" value="delete" class="sub" name="submit">
        </form>
        </form> 
        <form id="dead" style="margin-left: 15%;" action="deaddonation.php" method="post">
        <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
        <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select class="place" name="state">
                <option>Select state</option>
                <option>TAMILNADU</option>
                <option>ANDHRAPRADESH</option>
            </select><br><br><br><br>
            <select class="dis" name="cen">
            <?php
            $result=mysqli_query($mysqli, "SELECT DISTINCT Center FROM organupdate");
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
            <input type="text" class="da" name="phno" placeholder="Enter Your Phone Number"><br><br><br><br>
            <label style="text-align:center;">SELECT DATE AND TIME FOR donation</label><br><br><br>
            <input type="date" class="da" required name="dod">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="tod">
                <option>Time slot</option>
                <option>9:00-11:00</option>
                <option>12:00-2:00</option>
                <option>4:00-7:00</option><br><br><br><br>
            <label style="text-align:center;">Enter Basic details</label><br><br><br>
            <input type="text" class="da" value="Enter your Age"required name="age">&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="gen">
                <option>Select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
            <p>Reason For Death?</p>
            <input type="checkbox" name="tab" value="igotnone" id="b1" onclick="show1()">
            Brain Death
            <input type="checkbox" name="tab" value="igotnone" id="n1" onclick="show2()">
            Natural Death
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select class="vatype" name="dontype" id="bd1">
                    <option>Select the donation type</option>
                    <option>Liver</option>
                    <option>Heart</option>
                    <option>Kidney</option>
                    <option>Eye</option>
                    <option>Skin</option>
                </select><br><br>
                <select class="vatype" name="dontype" id="nd1">
                    <option>Select the donation type</option>
                    <option>Liver</option>
                    <option>Heart</option>
                    <option>Kidney</option>
                    <option>Eye</option>
                </select><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Submit" class="sub" name="submit" >
            <form name="delete"  method="post">
                <input type="button" value="Cancel Booking" name="del" class="sub" id="del2" style="padding: 13px 10px;"></form>
                <form name="delform" action="deaddodelete.php" method="post" id="defo">
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