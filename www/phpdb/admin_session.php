<?php
include "db.php";
session_start();
$email=$_SESSION['AEmail'];
$pass=$_SESSION['APassword'];
$query="SELECT AEmail,APassword FROM admin_login WHERE AEmail='$email' AND APassword='$pass' LIMIT 1";
$check=mysqli_query($con,$query);
$asession=mysqli_fetch_assoc($check);
     
if(!isset($asession)){
	mysqli_close($con);
	header('Location: /../NICE/www/admin.php');
}
?>