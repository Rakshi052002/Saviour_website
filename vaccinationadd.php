<?php
include_once("config.php");
$Name = $_POST['nam'];
$State = $_POST['state'];
$District = $_POST['district'];
$Vacctype = $_POST['vacctype'];
$Dov = $_POST['dov'];
$Tov = $_POST['tov'];
$Phoneno=$_POST['phno'];
if(isset($_POST['submit'])){
$result =mysqli_query($mysqli,"INSERT INTO userdetails  VALUES ('$Name', '$State', '$District','$Vacctype','$Dov','$tov','$Phoneno')");
header("Location:bookingthank.php");
}
?>