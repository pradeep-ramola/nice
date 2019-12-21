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
  color: dodgerblue;
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
    border-right: 7px solid #fefefe;
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
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">About Nice</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li> 
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="admin.php">Admin</a></li> 
        <li><a href="login.php">Log In</a></li>
        <li><a href="doc.php" target="_blank">Document</a></li>
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
  </ul>
    
<!--Card 1-->
    <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <span class="card-title"><b>Why Nice?</b></span>
          <p align="justify">Majority of Engineering students select their branch either as per elder's advice or based on job market potential.Rarely students consider their own interest and aspiration as a result,research and innovation fails behind industry gets only text book ready engineers,who have excellent qualification but not the education 80% of graduates every year remain unemployed.</p><br>
            
          <p align="justify"> One of the root causes of this problem is nonalignment of students interest with the chosen field.If we do something to align interest of new engineering aspirants and triggger the interst of existing engineering students the situation will drastically improve.That's the centraltheme to give birth to the competition <i>"Nurtuting Intelligence for Curious Engineers"</i></p>
        </div>
        
      </div>
    </div>
  </div>

<!--Card 2-->
    <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <span class="card-title"><b>The  Concept</b></span>
          <p align="justify">Graduating engineers visit junior college science students i.e 11th and 12th Std. deliver basic information about variety of engineering branches,with the intention to equip  aspiring engineers to make their decision based on thier interest.</p><br>
            
            <b><i>Benifits to participants</i></b>
           <ol>
           <li> Inspire social belongingness towards future engineering aspirants</li> 
           <li> Learn problem solving,leadership,team building,communication,mentoring by doing it</li>
            <li>Gain insight about own approach to engineeringgoa setting and career paths</li>
            <li>Induce a responsible research stance for the society</li>
            <li>Improved Employability.</li>
           </ol>
        </div>
        
      </div>
    </div>
  </div>
            
<!--Timeline-->
<div class="row">
<div class="col s12 m7">
<div class="card">
<div class="card-content">
<span class="card-title"><b>Journey of Nice</b></span>
<p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    
<div class="timeline">
  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event_note</i>
    </div>
    <div class="timeline-content">
        <p class="timeline-content-date">2013</p>
      <i>Launched in Mumbai,reached to one junior college,touched 50 students</i>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event_note</i>
    </div>
    <div class="timeline-content right">
        <p class="timeline-content-date">2014</p>
      <i>Launched in Maharashtra,reached to 80 junior colleges,touched 2200 students</i>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event_note</i>
    </div>
    <div class="timeline-content">
        <p class="timeline-content-date">2015</p>
      <i>Conducted in Maharashtra,reached to 110 junior colleges,touched 10,000 students</i>
    </div>
  </div>

  <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event_note</i>
    </div>
    <div class="timeline-content right">
      <p class="timeline-content-date">2016</p>
      <i>State Gujarat was added</i>
    </div>
  </div>
    
 <div class="timeline-item">
    <div class="timeline-icon">
     <i class="material-icons medium" >event_note</i>
    </div>
    <div class="timeline-content">
        <p class="timeline-content-date">2017</p>
      <i>State of Goa and Karnataka are added.</i>
    </div>
  </div>
</div>
</div>
</div>       
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