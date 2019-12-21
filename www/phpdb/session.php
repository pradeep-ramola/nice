<?php
include "db.php";
session_start();
$email=$_SESSION['Email'];
$pass=$_SESSION['Password'];
$query="SELECT Email,Password FROM team WHERE Email='$email' AND Password='$pass' LIMIT 1";
$check=mysqli_query($con,$query);
$session=mysqli_fetch_assoc($check);
     
if(!isset($session)){
	mysqli_close($con);
	header('Location: /../NICE/www/login.php');
}
?>