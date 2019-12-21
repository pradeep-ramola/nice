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
    <script>
      var check = function() {
        if (document.getElementById('pass').value==document.getElementById('password1').value ) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = '*Passwords match';
            document.getElementById('sub').disabled=false;
        } 
        else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = '*Password donot match';
            document.getElementById('sub').disabled=true;
        }
      }
    </script>

    </head>

     <body>
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Sign Up</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
         
        <li><a href="admin.php">Admin</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="doc.php">Document</a></li>
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
    
    <li><a href="admin.php">Admin</a></li>
    <li><a href="login.php">Log In</a></li>
    <li><a href="doc.php" target="_blank">Document</a></li>
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
    <div class="center">
        <h5>NICE Registration</h5>
    </div>
</div>
<form method="POST" action="phpdb/insert.php">
<div class="row">
   <div class="col s12">
       
       <h6><b>College details:</b></h6>
       <div class="input-field col s12">
      <input id="college_name" type="text" class="validate" name="college_name" required>
      <label class="active" for="college_name">College Name</label>
      </div>
       
       <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="textarea1"></textarea>
          <label for="textarea1">College Address</label>
        </div>
        <h6><b>Region details:</b></h6>
        <div class="input-field col s12">
        <input type="text" name="region" class="validate" id="region" required>
        <label class="active" for="region">Region</label>
      </div>
     </div>
</div>
    
<!--Team Leader-->

 <div class="row">
   <div class="col s12">
       <h6><b>Team leader's details:</b></h6>
     </div>
</div>
         
    <div class="row">
    
      <div class="row">
          
        <div class="input-field col s6">
      <input value="" id="firstnamel" type="text" class="validate" name="firstnamel" required>
      <label class="active" for="firstnamel">First Name</label>
      </div>

          
        <div class="input-field col s6">
        <input value="" id="lastnamel" type="text" class="validate" name="lastnamel" required>
        <label class="active" for="lastnamel">Last Name</label>
        </div>
        
          
        <div class="input-field col s6">
        <input value="" id="tell" type="tel" class="validate" name="tell" pattern="[7 8 9][0-9]{9}" required>
        <label class="active" for="tell">Telephone</label>
       </div>
          
        <div class="input-field col s6">
          <input id="emaill" type="email" class="validate" name="emaill" required>
          <label for="emaill">Email</label>
        </div>
          
          <div class="input-field col s6">
        <input value="" id="departmentl" type="text" class="validate" name="departmentl" required>
        <label class="active" for="Departmentl">Department</label>
        </div>
          
      <div class="input-field col s6">
      <select class="input-field" id="if1" name="if1" required>
      <option disabled selected></option>
      <option value="1">T.E</option>
      <option value="2">B.E</option>
      </select>
          
      <label>Year</label>
      </div>
</div>

<!--Team Member 1-->
<div class="row">
   <div class="col s12">
       <h6><b>Team Member 1 details:</b></h6>
     </div>
</div>
         
    
      <div class="row">
          
        <div class="input-field col s6">
      <input value="" id="first_name1" type="text" class="validate" name="first_name1" required>
      <label class="active" for="first_name1">First Name</label>
      </div>

          
        <div class="input-field col s6">
        <input value="" id="last_name1" type="text" class="validate" name="last_name1" required>
        <label class="active" for="last_name1">Last Name</label>
        </div>
        
          
        <div class="input-field col s6">
        <input value="" id="tel1" type="tel" class="validate" name="tel1" pattern="[7 8 9][0-9]{9}" required>
        <label class="active" for="tel1">Telephone</label>
       </div>
          
        <div class="input-field col s6">
          <input id="email1" type="email" name="email1" class="validate" required>
          <label for="email1">Email</label>
        </div>
          
          <div class="input-field col s6">
        <input value="" id="Department1" type="text" name="Department1" class="validate" required>
        <label class="active" for="Department1">Department</label>
        </div>
          
      <div class="input-field col s6">
      <select class="input-field" id="if2" name="if2" required>
      <option disabled selected></option>
      <option value="1">T.E</option>
      <option value="2">B.E<option>
      </select>
          
      <label>Year</label>
      </div>
</div>

<!--Team Member 2-->
<div class="row">
   <div class="col s12">
       <h6><b>Team Member 2 details:</b></h6>
     </div>
</div>
         
    

      <div class="row">
          
        <div class="input-field col s6">
      <input value="" id="first_name2" type="text" name="first_name2" class="validate">
      <label class="active" for="first_name2">First Name</label>
      </div>

          
        <div class="input-field col s6">
        <input value="" id="last_name2" type="text" name="last_name2" class="validate">
        <label class="active" for="last_name2">Last Name</label>
        </div>
        
          
        <div class="input-field col s6">
        <input value="" id="tel2" type="tel" class="validate" pattern="[7 8 9][0-9]{9}">
        <label class="active" for="tel2">Telephone</label>
       </div>
          
        <div class="input-field col s6">
          <input id="email2" type="email" class="validate">
          <label for="email2">Email</label>
        </div>
          
          <div class="input-field col s6">
        <input value="" id="Department2" type="text" class="validate">
        <label class="active" for="Department2">Department</label>
        </div>
          
      <div class="input-field col s6">
      <select class="input-field" id="if3">
      <option  disabled selected></option>
      <option value="1">T.E</option>
      <option value="2">B.E</option>
      </select>
          
      <label>Year</label>
      </div>
</div>
        
<!--Team Member 3-->
<div class="row">
   <div class="col s12">
       <h6><b>Team Member 3 details:</b></h6>
     </div>
</div>
         
    
      <div class="row">
          
        <div class="input-field col s6">
      <input value="" id="first_name3" type="text" name="first_name3" class="validate">
      <label class="active" for="first_name3">First Name</label>
      </div>

          
        <div class="input-field col s6">
        <input value="" id="last_name3" type="text" name="last_name3" class="validate">
        <label class="active" for="last_name3">Last Name</label>
        </div>
        
          
        <div class="input-field col s6">
        <input value="" id="tel3" type="tel" class="validate" pattern="[7 8 9][0-9]{9}">
        <label class="active" for="tel3">Telephone</label>
       </div>
          
        <div class="input-field col s6">
          <input id="email3" type="email" class="validate">
          <label for="email3">Email</label>
        </div>
          
          <div class="input-field col s6">
        <input value="" id="Department3" type="text" class="validate">
        <label class="active" for="Department3">Department</label>
        </div>
          
      <div class="input-field col s6">
      <select class="input-field" id="if4">
      <option value="" disabled selected></option>
      <option value="1">T.E</option>
      <option value="2">B.E</option>
      </select>
          
      <label>Year</label>
      </div>
</div>


<div class="row">
        <div class="input-field col s12">
            <h6><b>Team leader's email:</b></h6>

          <div class="input-field inline">
            <input id="email_inline" type="email" name="email_inline" class="validate">
            <label for="email_inline">Email</label>
              <span><i>*To be used for team login</i></span>
          </div>

        </div>
</div>

<div class="row">
        <div class="input-field col s6">
          <input id="pass" type="password" name="pass" class="validate" onkeyup='check();' required>
          <label for="pass">Password</label>
        </div>
</div>

<div class="row">
        <div class="input-field col s6">
          <input id="password1" type="password" name="password1" class="validate" onkeyup='check();' required>
          <label for="password1">Confirm Password</label>
        </div>
</div>
  </div>

  <span id="message"></span>


<div class="row">
        <div class="input-field col s12">  
       <p>
      <label>
        <input type="checkbox" required>
        <span>We Agree Terms and Conditions for NICE</span>
        <small><a href="tandc.php" target="_blank">T&C</a></small>
      </label>
    </p>
        </div>
</div>

<div class="row">
  
        <div class="input-field col s12"> 
         
    <button class="btn waves-effect waves-light blue darken-4" style="width: 100%;" type="submit" name="sub" id="sub" disabled>Submit
    <i class="material-icons right">send</i>
  </button>
        </div>

</div>
</form>
         
         
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
            
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
    
        </script>
        
    </body>
</html>
