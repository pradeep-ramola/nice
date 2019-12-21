<?php
include "db.php"; 

$data=array();

$q=mysqli_query($con,"select LF_Name,LL_Name,Telephone from team where Id=39");
$q1=mysqli_query($con,"select T1F_Name,T1L_Name,T1Telephone from team where Id=39");
$q2=mysqli_query($con,"select T2F_Name,T2L_Name,T2Telephone from team where Id=39");

while ($row=mysqli_fetch_object($q))
{
 $data[]=$row;
}

/*while ($row=mysqli_fetch_object($q1))
{
 $data[]=$row;
}

while ($row=mysqli_fetch_object($q2))
{
 $data[]=$row;
}*/

//val1=json_encode($data[0]);
//val2=json_encode($data[1]);

//echo val1;

//echo val2;
//val3=json_encode($data[2]);



//print_r($data[0]);

echo json_encode($data);
 

?>