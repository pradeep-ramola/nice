<?php

include "db.php";
    

if(isset($_POST['sub1'])){
    
$email=$_POST['email2'];
$textarea=$_POST['ta2'];

$q=mysqli_query($con,"INSERT INTO `feedback` (`Email`,`Message`) VALUES ('$email','$textarea')");
    
if($q)
 echo "success";
else 
 echo "error";
}



?>
