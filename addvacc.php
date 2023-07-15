<?php
include_once("config.php");
$State = $_POST['state'];
$Center = $_POST['Center'];
$Vacctype = $_POST['vacctype'];
$Dov = $_POST['dov'];
$Tov = $_POST['tov'];
$Phoneno=$_POST['phno'];
if(isset($_POST['submit'])){
$result =mysqli_query($mysqli,"INSERT INTO adminvacc  VALUES ('$Name', '$State', '$District','$Vacctype','$Dov','$Tov','$Phoneno')");
header("Location:index.php");
}
?>