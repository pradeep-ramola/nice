<?php  
include "phpdb/db.php";
include "phpdb/admin_session.php";
if(isset($_POST['region'])){
$region=$_POST['region'];
}
else{
  $region='Mumbai';
}
$query="SELECT team_no,colg_name,colg_add,region,LF_Name,LL_Name,Email,Telephone FROM team WHERE region='$region'";
$result=mysqli_query($con,$query);
// if($result){
//   echo "success";
// }
// else{
//   echo "error";
// }

?>
<!DOCTYPE html>
<html>
    <head>

      <?php 
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
      <a href="#!" class="brand-logo">Contestants</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="documents.php" target="">Documents</a></li>
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
    <li><a href="documents.php">Documents</a></li>
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
    
<form action="admin_page.php" method="POST">
<!--   <select value="region" name="region">
    <option value="Mumbai">Mumbai</option>
    <option value="Thane">Thane</option>
    <option value="Pune">Pune</option>
  </select> -->
    <center><h5>Contestant Details</h5></center>
    <div class="row">
    <div class="input-field col s12">
      <input type="text" name="region" id="region">
      <input type="submit" name="submit" value="Search" style="  background-color:#1C1CF0; border:none; color:white;padding:15px; text-align:center; display:inline-block; font-size:16px; margin:4px 2px; cursor:pointer; border-radius: 8px;">
      <label for="region">Region</label>
  </div>
  </div>
  <center><h5><?php echo"$region";?></h5></center>
  <hr/>
  <div>
  <table id="table1" class="centered">
  <thead>
  <th>Team No.</th>
  <th>College Name</th>
  <th>College Address</th>
  <th>Leader First Name</th>
  <th>Leader Last Name</th>
  <th>Email</th>
  <th>Phone</th>
  
   </thead>
<?php
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
    <tr>
      <td><a href="college_visit.php?E=<?php echo $row['Email'];?>" target="_blank"><?php echo $row['team_no'];?></a></td>
      <td><?php echo $row['colg_name'];?></td>
      <td><?php echo $row['colg_add'];?></td>
      <td><?php echo $row['LF_Name'];?></td>
      <td><?php echo $row['LL_Name'];?></td>
      <td><?php echo $row['Email'];?></td>
      <td><?php echo $row['Telephone'];?></td>
      
    </tr
    <?php
    }
  }
  else{
    echo "No Contestants";
  }
    ?>
 </table>
</div>  
</form>
    
    
    
    
    <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
             
  $(document).ready(function(){
    $('.tabs').tabs();
  });
            
        </script>
    </body>
</html>