<?php
include "phpdb/db.php";
include "phpdb/session.php";
$check="SELECT team_no,colg_name,colg_add,LF_Name,LL_Name,Email FROM team";
$result=mysqli_query($con,$check);
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
        
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <script type="text/javascript" src="js/jquery.js">
        </script>
        
<!--         <script> 
           $(document).ready(function()
            {
                var url="http://localhost:8080/test/json.php";
                $.getJSON(url,function(result){
                console.log(result);
                $.each(result, function(i, field){
                var Id=field.Id;
                var College_Name=field.College_Name;
                var College_Address=field.College_Address;
                var LF_Name=field.LF_Name;
                var LL_Name=field.LL_Name;
                var Email=field.Email;
                var Telephone=field.Telephone;
                $("#table1").append("<tr><td>"+College_Name+"</td><td>"+College_Address+"</td><td>"+LF_Name+"</td><td>"+LL_Name+"</td><td>"+Email+"</td><td>"+Telephone+"</td></tr>");
                });
                });
            });
        </script> -->
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="doc.php" target="_blank">Document</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="add_college.php">Add College</a></li> 
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
    <li><a href="doc.php" target="_blank">Document</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="add_college.php">Add College</a></li> 
        <li><a href="phpdb/logout.php">Logout</a></li>
  </ul>
  
    
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
    </div>
 
    <center><h5>Team Details</h5></center>
  <div>
  <table id="table1" align="center" border="1px" class="centered">
  <thead>
  <th>Team No.</th>
  <th>College Name</th>
  <th>College Address</th>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Email</th>
 
   </thead>
<?php
      while($rows=mysqli_fetch_assoc($result))
      {
?>
        <tr>
          <td><?php echo $rows['team_no'];?></td>
          <td><?php echo $rows['colg_name'];?></td>
          <td><?php echo $rows['colg_add'];?></td>
          <td><?php echo $rows['LF_Name'];?></td>
          <td><?php echo $rows['LL_Name'];?></td>
          <td><?php echo $rows['Email'];?></td>
          
        </tr>
        <?php
      }
?> 
 </table>
</div>  
    
    
    
    
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