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
        
        <!-- <script>
            $(document).ready(function(){
                
                $("#sub1").click(function(){
                    
                var email1 = $("#email1").val();
                var password1 = $("#password1").val();
                var dataString="email1="+email1+"&password1="+password1+"&sub1=";
                    
                if($.trim(email1).length >0 & $.trim(password1).length >0) 
                {
                $.ajax({
                    type:"POST",
                    url: "http://localhost:8080/www/phpdb/forget.php",
                    data: dataString,
                    cache:false,
                    beforeSend: function(){ $("#sub1").val('Connecting...');},
                    success: function(data){
                    if(data=="success")
                    {
                      window.location.href="loggedin.html";
                    }
                    else if(data=="error")
                    {
                         alert("error");
                    }
                    }
                    });
                }return false;
                    });
                    });
            
            
        </script> -->
</head>
<body>
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Reset Password</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>  
        <li><a href="about.php">About us</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="login.php">Log In</a></li>
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
    <li><a href="signup.php">Register for Nice</a></li>
    <li><a href="admin.php">Admin</a></li>
    <li><a href="login.php">Log In</a></li>
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
    <form method="POST" action="phpdb/forget.php" class="col s12">
        <div class="row">
        <div class="input-field col s12">
          <input id="email2" type="email" name="email2" class="validate" required>
          <label for="email2">Email</label>
        </div>
      </div>
        
        
        <!-- <div class="row">
        <div class="input-field col s12">
          <input id="hashcode" type="password" name="hashcode" class="validate" disabled>
          <label for="hashcode">Code</label>
        </div>
      </div> -->
        
        
        
        <div class="row">
  
        <div class="input-field col s12"> 
         
    <button class="btn waves-effect waves-light blue darken-4" style="width: 100%;" type="submit" name="sub2" id="sub2">Reset
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    