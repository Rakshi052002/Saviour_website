<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Saviour-Vaccine</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="fonts/circular-std/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/userpage.css">
      <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
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
        background: url('uploads/vaccine.jpg');
        background-repeat: no-repeat;
        background-size: cover;
   }
   form{
       padding-top: 10%;
      background-color:rgba(255, 255, 255, 0.549);
      width: 70%;
      padding: 50px;
     margin: 100px;
     box-shadow: 4px 4px 8px 8px rgb(69, 58, 221);
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
                           <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                               <a href="vaccination.html">VACCINATION</a><hr>
                               <a href="blooddonation.html">BLOOD DONATION</a><hr>
                               <a href="donation.html">ORGAN DONATION</a><hr>
                               <a href="organavailable.html">BLOOD AND ORGAN AVAILABLE</a><br>
                           </div>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about.php">About us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                       </li>
                       <li class="nav-item dropdown nav-user">
                           <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="uploads/default-image.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                           <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                               <div class="nav-user-info">
                                   <h5 class="mb-0 text-white nav-user-name"></h5>
                                   <span class="status"></span><span class="ml-2">Available</span>
                               </div>
                               <a class="dropdown-item" href="login.html"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                               <a class="dropdown-item" href="registration.html"><i class="fas fa-power-off mr-2"></i>Register</a>
                           </div>
                       </li>
                   </ul>
               </div>
           </nav>
       </div>
        <h1 style="text-align:center ;">BOOK YOUR SLOTS</h1>    
        <form action="vaccinationadd.php" style="margin-left: 15%;" method="post" name="form1">
        <input type="text" placeholder="Enter your name" required name="nam" class="nam"/>
        <span id="s1" style="color: red;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select class="place" name="state">
                <option>Select state</option>
                <option>ANDHRAPRADESH</option>
                <option>ANDHRAPRADESH</option>
                <option>ANDHRAPRADESH</option>
            </select><br><br><br><br>
            <select class="dis" name="district">
                <option>Select district</option>
                <option>Chennai</option>
                <option>Chennai</option>
                <option>Chennai</option>
                <option>Chennai</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="vatype" name="vacctype">
                <option>Select the vaccination type</option>
                <option>covaxin</option>
                <option>Covaxin</option>
                <option>covaxin</option>
            </select><br><br><br><br>
            <label style="text-align:center;">SELECT DATE AND TIME FOR VACCINATION</label><br><br><br>
            <input type="date" class="da" name="dov"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="time" class="ti" name="tov"required><br><br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Submit" class="sub" name="submit" onclick="vaccinate()">
        </form>
    </body>
</html>