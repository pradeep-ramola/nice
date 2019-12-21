 <!DOCTYPE html> 
<html> 
    <head>

      <?php 
      include "icons.php";
      session_start();
      ?>


      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <script type="text/javascript" src="js/jquery.js">
        </script>
     
        <style>
        .n {
             
            background-color:red;
            border: none;
            color: black;
            padding: 15px 44px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        </style>
        
</head>
<body>
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">  Welcome </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="doc.php" target="_blank">Document</a></li>
        <li><a href="add_college.php">Add Colleges</a></li> 
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
    <li><a href="add_college.php">Add Colleges</a></li> 
        <li><a href="phpdb/logout.php">Logout</a></li>
    < 
     
  </ul>
  
    
    <div class="row">
        
    </div>    
    <div class="row">
        <div class="center">
            
      <img src="img/NICElogo.jpg" width="277.5px" height="125px"/>      
            
    </div>
      </div>
    
          <center>  <h1>A Warm Welcome</h1>
            <h2> <?php echo $_SESSION['name'];
                    echo" and Team ";?> </h2></center>
            <h2><p>   &nbsp &nbsp Are you aware of our terms and conditions ?</p></h2>
            &nbsp &nbsp &nbsp &nbsp &nbsp<a  href="know.php" class="n" >Know More </a>
            
       

     
</body>
      </html>