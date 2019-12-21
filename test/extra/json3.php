<?php
include "db.php"; 

$data=array();

$q1=mysqli_query($con,"select T1F_Name,T1L_Name,T1Telephone from team where Id=39");

while ($row=mysqli_fetch_object($q1))
{
 $data[]=$row;
}

echo json_encode($data);
 
    
    
?>