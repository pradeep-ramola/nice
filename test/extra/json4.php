<?php
include "db.php"; 

$data=array();

$q2=mysqli_query($con,"select T2F_Name,T2L_Name,T2Telephone from team where Id=39");

while ($row=mysqli_fetch_object($q2))
{
 $data[]=$row;
}

echo json_encode($data);
 
    
    
?>