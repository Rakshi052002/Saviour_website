<?php
include("config.php");
$Name = $_POST['nam'];
$Phoneno = $_POST['phno'];
if(isset($_POST['submit'])){
    $ins_query="DELETE FROM donationdetails WHERE `Name`='$Name' and `Phoneno`='$Phoneno' ";
    $result = mysqli_query($mysqli,$ins_query);    
header("Location:cancelthank.php");
}
?>