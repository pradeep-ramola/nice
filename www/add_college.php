<?php
include "phpdb/db.php";
include "phpdb/session.php";
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
        
        
</head>
<body>
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Add Colleges</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">Dashboard</a></li>
         
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
        <li><a href="dashboard.php">Dashboard</a></li>
         
        <li><a href="phpdb/logout.php">Logout</a></li>
  </ul>
  
    
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
      </div>
    
    
    
<div class="row">
    <form method="POST" action="phpdb/collegedb.php" class="col s12">
        <div class="row">
        <div class="input-field col s12">
          <input id="name1" type="text" class="validate" name="name1">
          <label for="name1">Name of College</label>
        </div>
      </div>
        
        
        <div class="row">
        <div class="input-field col s12">
          <input id="address1" type="text" class="validate" name="address1">
          <label for="address1">Address</label>
        </div>
      </div>
        
        <div class="row">
        <div class="input-field col s12">
          <input id="nos1" type="text" class="validate" name="nos1">
          <label for="nos1">Number of Students</label>
        </div>
      </div>
        
          
        <div class="row">
  
        <div class="input-field col s12"> 
         
    <button class="btn waves-effect waves-light blue darken-4" style="width: 100%;" type="submit" id="sub1" name="sub1">Add
    <i class="material-icons right">send</i>
  </button>
        </div>
            
</div>
    </form>
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