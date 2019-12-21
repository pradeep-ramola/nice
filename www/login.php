<!DOCTYPE html> 
<html> 
    <head>

      <?php 
      session_start();
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
      <a href="#!" class="brand-logo">Log In</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>  
        <li><a href="about.php">About us</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="doc.php">Document</a></li>
        <li><a href="admin.php">Admin</a></li>
        
        <li><a href="feedback.php">Feedback</a></li>
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
    
    <li><a href="index.php">Home</a></li>  
    <li><a href="about.php">About Nice</a></li>
    <li><a href="signup.php">Sign Up</a></li>
    <li><a href="doc.php">Document</a></li>
    <li><a href="admin.php">Admin</a></li>
    
    <li><a href="feedback.php">Feedback</a></li>
  </ul>
  
    
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
      </div>
    
    
    
<div class="row">
    <form method="POST" action="phpdb/login_nice.php" class="col s12">
        <div class="row">
        <div class="input-field col s12">
          <input id="email1" type="email" name="email1" class="validate" required>
          <label for="email1">Email</label>
        </div>
      </div>
        
        
        <div class="row">
        <div class="input-field col s12">
          <input id="password1" type="password" name="password1" class="validate" required>
          <label for="password1">Password</label>
        </div>
      </div>
        
        <div class="row">
        <div class="input-field col s12">
             <a href="forget.php" style="width: 25%;" href="forget1.html">Forgot Password</a>
 </div>
        </div> 

        <div class="row">
  
        <div class="input-field col s12"> 
         
    <button class="btn waves-effect waves-light blue darken-4" style="width: 100%;" type="submit" name="sub1" id="sub1">Log In
    <i class="material-icons right">send</i>
  </button>
        </div>
      </form>
            <div class="input-field col s12">
             <a class="btn waves-effect waves-light blue darken-4" style="width: 100%;" href="signup.php">Don't have an account?</a>
 </div>
</div>
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