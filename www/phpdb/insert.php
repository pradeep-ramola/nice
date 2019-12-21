<?php
 include "db.php"; 
 
session_start();

if(isset($_POST['sub'])){
	$cn=$_POST['college_name'];
	$ca=$_POST['textarea1'];
	$region=$_POST['region'];     
	$fnl=$_POST['firstnamel'];

	$lnl=$_POST['lastnamel'];
	$tel=$_POST['tell'];
	$eml=$_POST['emaill'];
	$depl=$_POST['departmentl'];
	$yl=$_POST['if1'];
	$passw=$_POST['pass'];
	$salt='3x%%$bf83#dls2qgdf';
	$passwo=md5($salt.$passw);
	$fname1=$_POST['first_name1'];
	$lname1=$_POST['last_name1'];
	$tel1=$_POST['tel1'];
	$email1=$_POST['email1'];
	$dep1=$_POST['Department1'];
	$y1=$_POST['if2'];
	$fname2=$_POST['first_name2'];
	$lname2=$_POST['last_name2'];
	$fname3=$_POST['first_name3'];
	$lname3=$_POST['last_name3'];


	$query="SELECT * FROM team WHERE Email='$eml'";
	$check=mysqli_query($con,$query);
	$ab=mysqli_fetch_assoc($check);

	if($ab){
		// header('Location:/../NICE/www/signup.php');
		echo "error exists";
	}
	else{
		$q="INSERT INTO team(team_no,colg_name,colg_add,region,LF_Name,LL_Name,Telephone,Email,Department,Year,Password,fname1,lname1,tel1,email1,dep1,y1,fname2,lname2,fname3,lname3) VALUES ('','$cn','$ca','$region','$fnl','$lnl','$tel','$eml','$depl','$yl','$passwo','$fname1','$lname1','$tel1','email1','dep1','y1','$fname2','$lname2','$fname3','$lname3')";
		$result=mysqli_query($con,$q);

		if($result){
			$_SESSION['Email']=$eml;
		 	$_SESSION['Password']=$passwo;
		    header("Location:/../NICE/www/login.php");
			// echo "success";
		}
		else{
		    header("Location:/../NICE/www/signup.php");
		    // echo "error";
		}
	}
	mysqli_close($con);
}
?>