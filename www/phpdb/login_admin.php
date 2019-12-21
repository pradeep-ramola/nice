<?php 
 include "db.php";
session_start();
 if(isset($_POST['sub1']))
 {   
     
  $aemail=$_POST['email1'];
  $apass=$_POST['password1'];
  $salt='3x%%$bf83#dls2qgdf';
  $passwo=md5($salt.$apass);
    
  $alogin="SELECT * FROM admin_login WHERE AEmail='$aemail' AND APassword='$apass' LIMIT 1";
  $check=mysqli_query($con,$alogin);
  $admin_login=mysqli_fetch_assoc($check); 
  
  if($admin_login['AEmail']==$aemail AND $admin_login['APassword']==$apass){
    $_SESSION['AEmail']=$aemail;
    $_SESSION['APassword']=$apass; 
    header('Location:/../NICE/www/admin_page.php');
    // echo "success";
    }
  else{
    header('Location:/../NICE/www/admin.php');
    // echo"error";
  }    
 }

 ?>