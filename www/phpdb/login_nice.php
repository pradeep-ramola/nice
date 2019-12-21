<?php  
include "db.php";
session_start();
if(isset($_POST['sub1']))
{
    
  $mail2=$_POST['email1'];
  $pass=$_POST['password1']; 
  $salt='3x%%$bf83#dls2qgdf';
  $passwo=md5($salt.$pass); 
    
  $query="SELECT * FROM team WHERE Email='$mail2' AND Password='$passwo' LIMIT 1";
  $check=mysqli_query($con,$query);
  $login=mysqli_fetch_assoc($check);
 
 
if($login['Email']==$mail2 AND $login['Password']==$passwo){
    $_SESSION['Email']=$mail2;
    $_SESSION['Password']=$passwo;
    $_SESSION['name']=$login['LF_Name'];
    header('Location: /../NICE/www/welcome.php');
}
else{
 	header('Location: /../NICE/www/login.php');
}
mysqli_close($con);
}    
?>