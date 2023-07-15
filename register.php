<?php

include_once('config.php');

session_start();

if(isset($_POST['submit'])){
    
   $username = ($_POST['username']);
   $password = ($_POST['password']);
   $rpassword = ($_POST['rpassword']);
  $result =mysqli_query($mysqli, " SELECT * FROM userregister WHERE username = '$username' && password = '$password'");
   if(mysqli_num_rows($result) > 0){
      $error[]= 'user already exist';
   }else{
      if($password != $rpassword){
        $error[]= 'password not mathched!';
              
    }else{
         $insert =mysqli_query($mysqli, "INSERT INTO userregister(username, password) VALUES('$username','$password')");
         header('location:login.php');
      }
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css">
   <style>
    form{
    padding-top: 10%;
    background-color:rgba(255, 255, 255, 0.549);
  width: 300px;
  padding: 50px;
  margin: 100px;
  box-shadow: 4px 4px 8px 8px rgb(94, 85, 217);
}
body{
    background: url('uploads/signup.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
img{
    height: 30%;
    width:30%;
    padding-left: 35%;
}
.lo{
    border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: rgb(63, 139, 233);
  text-align: center;
  cursor: pointer;
  width: 108%;
  font-size: 18px;
}
.user,.pass{
    border: none;
  outline: 0;
  padding: 12px;

  background-color: rgb(239, 239, 239);
  width: 100%;
  font-size: 18px;
}
.cancelbtn{
    border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: rgb(186, 32, 32);
  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 10px;
}
h1{
    padding-top: 1%;
    color: gray;
    font-size:x-large;
}
.error-msg{
   display: block;
   width: 100%;
   padding:10px 0;
   margin:10px 0;
   background-color: crimson;
   font-size: 20px;
   color:#fff;
}
</style> 
</head>
<body>
    
<div class="form-container">

   <form action="" method="post" style="margin-left: 40%;">
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <div class="container">
            <h3 style="padding-left:15%;">CREATE AN ACCOUNT</h3><br>
            <input type="text" placeholder="Set username" name="username" class="user"required>  <br><br>
            <input type="password" placeholder=" Password" name="password" class="pass" required>  <br><br>
            <input type="password" placeholder="Repeat Your Password" class="pass" name="rpassword"required><br><br>
            <button type="submit" class="lo" name="submit" onclick="file()">REGISTER</button>   <br><br>
            <input type="checkbox" checked="checked"> Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset" class="cancelbtn"> Cancel</button> <br>  <br>
            Already have an Account<a href="login.php"> LOGIN </a>   <br><br>
        </div>   
   </form>

</div>

</body>
</html>