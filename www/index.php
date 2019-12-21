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
        
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
<style>
.timeline .timeline-item::after, .timeline .timeline-item::before {
  clear: both;
  content: '';
  display: block;
  width: 100%;
}

.timeline {
  margin: 30px auto;
  padding: 0 10px;
  position: relative;
  transition: all 0.25s ease-in;
  width: 100%;
}

.timeline::before {
  background-color:yellow;
  content: '';
  height: 100%;
  left: 50%;
  position: absolute;
  top: 0;
  width: 3px;
}

.timeline::after {
  clear: both;
  content: '';
  display: table;
  width: 100%;
}

.timeline a {
  font-weight: bold;
  transition: all 0.25s ease-in;
}

.timeline a:hover {
  box-shadow: 0 1px 0px 0px;
  transition: all 0.25s ease-in;
}

.timeline .timeline-item {
  margin-bottom: 50px;
  position: relative;
}

.timeline .timeline-item .timeline-icon {
  background-color: white;
 
  height: 50px;
  left: 50%;
  margin-left: -23px;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: 50px;
}

.timeline .timeline-item .timeline-icon img,
.timeline .timeline-item .timeline-icon svg {
  left: 10px;
  position: relative;
  top: 10px;
}

.timeline .timeline-item .timeline-icon svg {
  top: 10px;
}

.timeline .timeline-item .timeline-content {
  padding: 20px;
  text-align: right;
  transition: all 0.25s ease-in;
  width: 45%;
  background: transparent;
}

.timeline .timeline-item .timeline-content p {
  color: black;
}

.timeline .timeline-item .timeline-content p {
  font-size: 16px;
  line-height: 1.4;
  margin-bottom: 0;
}

.timeline .timeline-item .timeline-content .timeline-content-date {
  font-size: 20px;
  font-weight: bold;
  margin-left: 20px;
}

.timeline .timeline-item .timeline-content .timeline-content-month {
  font-size: 0.875rem;
  text-transform: uppercase;
  font-weight: 400;
}

.timeline .timeline-item .timeline-content.right {
  float: right;
  text-align: left;
}

@media screen and (max-width: 39.9375em) {
  .timeline {
    margin: 30px;
    padding: 0;
    width: 90%;
  }
  .timeline::before {
    left: 0;
  }
  .timeline .timeline-item .timeline-content {
    float: right;
    text-align: left;
    width: 90%;
  }
  .timeline .timeline-item .timeline-content::before, .timeline .timeline-item .timeline-content.right::before {
    border-left: 0;
    border-right: 7px solid darkblue;
    left: 10%;
    margin-left: 6px;
  }
  .timeline .timeline-item .timeline-icon {
    left: 2px;
  }
    .timeline .timeline-item .timeline-content.right {
  float: right;
  text-align: left;
}
 

}
</style>
        <script>
            
        </script>
</head>

<body onload="">
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">NICE</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>  
        <li><a href="about.php">About us</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="doc.php" target="_blank">Document</a></li>
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
    <li><a href="doc.php" target="_blank">Document</a></li>
    <li><a href="feedback.php">Feedback</a></li>
  </ul>
        
  <div class="row" style="margin-top: 30px;">
  <div class="col s12 m7">
  <div class="card">
  <div class="card-content">
    <span class="card-title"><b>Nice</b></span>
    <p align="justify"> Majority of the engineering students select their branch either as per elder's advice or based on job market potential.As a result industry gets only texbook ready engineers.</p><br>
    <p align="justify">One of the root cause of this problem is non-alignment of studnets interest with the chosen field.<b>If we do something to align the interest of new engineering aspirants and trigger the interest of existing engineering students the situation will drastically improve.</b> That's the central theme to give birth to the competition <b><i>"Nurturing Intelligence for Curious Engineers"</i></b></p>
  </div>
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a class="active" href="#test1"><img src="img/t2.png" style="height: 30px;width: 30px;"></a></li>
      <li class="tab"><a href="#test2"><img src="img/t1.png" style="height: 30px;width: 30px;"></a></li>
    </ul>
  </div>
  <div class="card-content grey lighten-4">
    <div id="test1">
      <div class="center"><h6>1st Runners Up</h6></div>
        <i class="material-icons">money</i>
    </div>
    <div id="test2">
      <div class="center"><h6>Winners</h6></div>
      <i class="material-icons">money</i>
    </div>
  </div>
</div>
</div>
</div>
        
        
<!--Timeline-->
<div class="row">
<div class="col s12 m7">
<div class="card">
<div class="card-content">
<span class="card-title"><b>Road to Finale</b></span>
<div class="timeline">
    <div class="timeline-item">
    <div class="timeline-icon">
        <i class="material-icons medium" >event</i>
    </div>
    <div class="timeline-content">
        <p class="timeline-content-date">Before 29th Sept'</p>
      <i>Seminar conduction at junior colleges</i>
    </div>
  </div>
    
  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event</i>
    </div>
    <div class="timeline-content">
        <p class="timeline-content-date">29 Sept'</p>
      <i>Regional Round</i>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event</i>
    </div>
    <div class="timeline-content right">
        <p class="timeline-content-date">13th Oct'</p>
      <i>Competition between winners and runner ups from each region</i>
    </div>
  </div>

  
  
</div>
</div>
</div>
</div>
</div>
<a class="btn waves-effect waves-light blue darken-4" style="width: 100%;" href="signup.php" style>Register to Participate</a>
    
      <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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