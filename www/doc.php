<?php
 error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
	<title>Documents</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Import Google Icon Font-->
 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <script type="text/javascript" src="js/jquery.js">
        </script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/profile.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link href="css/jquery.fileuploader.css" media="all" rel="stylesheet">
    <link href="css/jquery.fileuploader-theme-dragdrop.css" media="all" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery.fileuploader.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    
</head>
<body onload="check()">
	 <nav> 
    <div class="nav-wrapper">
     
       
  </nav>
<ul class="sidenav" id="mobile-demo">
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
    </div>
   
    <li><a href="admin_page.php">Contestant Details</a></li>
    <li><a href="phpdb/logout.php">Logout</a></li>
  </ul>
  
    
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
    </div>
 
<?php
    
   			error_reporting(0);
   			$isFolder = is_dir("img/".$projekt."/");
	
   			// folder name on server 
   			$folder = "docs/".$url."/"; 
   			if($isFolder){
      			$data = scandir($folder);
   			} 
   			if($data){
      			foreach ($data as $dat) {
         			$info = pathinfo($folder."/".$dat); 
         			// get image size
         			$size = ceil(filesize($folder."/".$dat)/1024); 
         			if ($dat != "." && $dat != ".." && $dat != "_notes" && $info['extension'] != "") { 
         	?>
            			<li style="margin-left: 15px;background-color: white; max-width: auto; padding: 10px 20px; border: 1px solid rgb(235,235,235); border-left: 2px solid green;"><a href="<?php echo $info['dirname']."/".$info['basename'];?>" title="Download" download><?php echo $info['filename']; ?></a><br><?php echo $info['extension']; ?> | <?php echo $size ; ?> kb </li><br>
       	 			
       	 	<?php 
       	 			};
      			};
    		}else{
        		// this folder is not available
       			echo "<p>Folder not found.</p>";
    		} 
    		?> 
        