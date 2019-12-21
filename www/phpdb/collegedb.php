<?php
include "db.php";
session_start();

if(isset($_POST['sub1'])){

$mail=$_SESSION['Email'];
$name=mysqli_real_escape_string($con,$_POST['name1']);
$address=mysqli_real_escape_string($con,$_POST['address1']);
$nos=mysqli_real_escape_string($con,$_POST['nos1']);
 
$check="INSERT INTO v_colleges (email,jcollege_n,jcollege_a,n_o_s) VALUES ('$mail','$name','$address','$nos')";
$query=mysqli_query($con,$check);
if($query)
  	header('Location: /../NICE/www/add_college.php');
else
	echo "Error updating data";
}
mysqli_close($con);
?>