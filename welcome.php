<?php

include_once('config.php');

session_start();

if(!isset($_SESSION['username'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    body{
    background: url('uploads/hello.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
h3,p{
    color:white;
}
    </style>
</head>
<body>
    
<div class="container">
   <div class="content">
    <center>
      <h3>Welcome!</h3>
      <p> <span><?php echo $_SESSION['username']; ?></span></p>
</center>
   </div>
</div>

</body>
</html>