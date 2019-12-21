<?php
include "db.php"; 

$data=array();

$q=mysqli_query($con,"select jcollege_n,jcollege_a,n_o_s from v_colleges where Id=39");

while ($row=mysqli_fetch_object($q))
{
 $data[]=$row;
}

echo json_encode($data);
 
    
    
?>