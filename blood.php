<?php
include_once("config.php");
$Name = $_POST['nam'];
$State = $_POST['state'];
$Center = $_POST['cen'];
$Bloodgroup = $_POST['bg'];
$Age=$_POST['age'];
$Gender=$_POST['gen'];
$Dod = $_POST['dod'];
$Tod = $_POST['tod'];
$Phoneno=$_POST['phno'];
if(isset($_POST['submit'])){
$result =mysqli_query($mysqli,"INSERT INTO blood  VALUES ('$Name', '$State', '$Center','$Bloodgroup','$Age','$Gender','$Dod','$Tod','$Phoneno')");
header('Location:bookingthank.php');
}
?>