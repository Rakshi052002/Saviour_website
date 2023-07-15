<?php

include_once('config.php');
session_start();
if(isset($_POST['submit'])){  
   $username = ($_POST['username']);
   $password = ($_POST['password']);
   $result =mysqli_query($mysqli, " SELECT * FROM userregister WHERE username = '$username' && password = '$password'");
   if(mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $username;
      header('location:index.php');
   }else{
      $error[]= 'incorrect password or username.';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
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
        .error-msg{
   display: block;
   width: 100%;
   padding:10px 0;
   margin:10px 0;
   background-color: crimson;
   font-size: 20px;
   color:#fff;
}
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('uploads/signup.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) ;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0t;
}

input:focus{
outline: 0 0 0 0  ;
box-shadow: 0 0 0 0 ;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style> 
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <img style="width:5%"src="uploads/logo1.jpeg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars mx-3
"></i></span>
                </button>
  <ul class="navbar-nav ml-auto navbar-right-top">
    <li class="nav-item">
      <a class="nav-link" href="about.php">ABOUT US</a>
    </li>
    <li class="nav-item dropdown">
     <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">
        PROFILE
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">USER LOGIN</a>
        <a class="dropdown-item" href="logout.php">USER LOGIN</a>
        <a class="dropdown-item" href="register.php">REGISTER</a>
        <a class="dropdown-item" href="adminlogin.php">ADMIN LOGIN</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">CONTACT</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <div class="card-header">
            <center><h3>Login</h3></center>

          </div>
          <div class="card-body">
            <form action="" method="post">
            <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="username" name="username">
                
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="password" name="password">
              </div>
              <div class="row align-items-center remember">
                <input type="checkbox">Remember Me
              </div>
              <div class="form-group">
                <input type="submit" value="Login" class="btn float-right login_btn" name="submit">
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              Don't have an account?<a href="register.php">Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                         </div>
          </div>
        </div>
      </div>
    </div>
    </body>
    </html>