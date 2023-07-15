<?php
include_once("config.php");
$Name = $_POST['nam'];
$State = $_POST['state'];
$Center = $_POST['cen'];
$donationtype = $_POST['dontype'];
$Dod = $_POST['dod'];
$Tod = $_POST['tod'];
$Age=$_POST['age'];
$Gender=$_POST['gen'];
$Medicalreport=$_POST['det'];
$Phoneno=$_POST['phno'];
if(isset($_POST['submit'])){
$result =mysqli_query($mysqli,"INSERT INTO donationdetails  VALUES ('$Name', '$State', '$Center','$donationtype','$Dod','$Tod','$Age','$Gender','$Medicalreport','$Phoneno')");
header('Location:bookingthank.php');
}
?>