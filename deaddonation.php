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
$Phoneno=$_POST['phno'];
if(isset($_POST['submit'])){
$result =mysqli_query($mysqli,"INSERT INTO deaddonationdetails  VALUES ('$Name', '$State', '$Center','$donationtype','$Dod','$Tod','$Age','$Gender','$Phoneno')");
header('Location:bookingthank.php');
}
?>