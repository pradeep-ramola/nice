
<!DOCTYPE html>
<html>
    <head>
    <?php  
include "phpdb/db.php";
include "phpdb/admin_session.php";
     
      include "icons.php";
      ?>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="https://tympanus.net/Development/ProgressButtonStyles/"> 
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <script type="text/javascript" src="js/jquery.js">
        </script>



</head>
<body>

<nav> 
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">VISITED COLLEGES</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admin_page.php">Contestant Details</a></li>  
        <li><a href="phpdb/logout.php">Logout</a></li>
      </ul>
    </div>
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
    <table id="table1" class="centered">
  <thead>
   <th>NO</th>
  <th>Junior College</th>
  <th>College Address</th>
  <th> No of students</th>
   </thead>
   </thead>
<?php   
 $E=$_GET['E'];
 $sn=1;
$query="SELECT jcollege_n,jcollege_a,n_o_s FROM v_colleges WHERE email='$E'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
    <tr>
    <td><?php echo $sn++;?></td>
      <td><?php echo $row['jcollege_n'];?></td>
      <td><?php echo $row['jcollege_a'];?></td>
      <td><?php echo $row['n_o_s'];?></td>
      
      
    </tr>
    <?php
    }
  }
  else{
    echo "Not visited yet";
  }
    ?>
 </table>