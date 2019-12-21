<?php

include "db.php";
// ini_set("SMTP","localhost");
// ini_set("smtp_port","25");
// ini_set('sendmail_from', 'postmaster@localhost');

if(isset($_POST['sub2']))
{
$email="manankotak99@gmail.com";
$subject = "Testing PHP Mail";
$message = "This mail is sent using the PHP mail function";
$headers = "From: noreply@company.com";
$send=mail($email,$subject,$message,$headers);

// $to = $email;
// $subject = "Reset Password";
// $txt = mt_rand();
// $headers = "From: manankotak99@gmail.com \r\n";

// $login = mysqli_query($con, "UPDATE team SET Password='$txt' WHERE Email='$email'");
    
// $mailsent=makiil($to,$subject,$txt,$headers);   
    
if($send==true){
      echo "success";
      }   
else{
      echo "error";
    }
} 
?>