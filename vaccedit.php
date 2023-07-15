<html>
<head>
<title>update service availability</title>
<style>
h1{
    padding-top: 20%;
    color: green;
    font-size:x-large;
    font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
}
body{
    background: url("bgimg6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    align-content: center;
}
</style>
</head>
<body>
<?php
// including the database connection file
include_once("config.php");
$Name = $_POST['nam'];
$Dov = $_POST['dov'];
$tov = $_POST['tov'];
$Phoneno = $_POST['phno'];
//updating the table
if(isset($_POST['update'])){
$result = mysqli_query($mysqli, "UPDATE `userdetails` SET Name='$Name' and Dov='$Dov' and tov='$tov' WHERE Phoneno='$Phoneno'");
echo "hi";
}
?>
<center><h1>AVAILABILITY UPDATED SUCCESSFULLY</h1></center>
</body>
</html>
