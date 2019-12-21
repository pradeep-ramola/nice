<?php
include "db.php";
$data=array();
$q=mysqli_query($con,
                "select t_college.College_Name,t_college.College_Address,team.LF_Name,team.LL_Name,team.Email,team.Telephone from team
                inner join t_college
                on team.Id=t_college.Id");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}

echo json_encode($data);

?>