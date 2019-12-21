<?php
session_start();
 ?>



<html>
<head>
  <title> Mediorder | Login </title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="jquery-3.3.1.min.js">
        </script>
        <script>
            $(document).ready(function(){
             $("#sub").click(function(){
            var Name= $.trim($("#Name").val());
            var password= $.trim($("#password").val());
            $.ajax({
            type: "POST", 
            url: "http://localhost:8080/Test/process2.php",
            data: {Name:Name,password:password},
            cache: false,
            success: function(data){
            if(data == "success") {
                window.location.href = "welcome2.html";
            }
            else if(data == "error")
            {
                alert("Login Failed");
            }
        }
    })
})
})
        </script>
    </head>
<body>

  <header>
    <div class="container" id="opac">
      <div id="branding">
        <center><h1><a href="index.php">Mediorder</a></h1></center>
      </div>
      </div>
  </header>
<section>
    <center><h1>Distributor</h1></center>
  <div class="container" id="form_1">
    <form name="Login" method="post" action="">
        <input type="text"  id="Name"  placeholder="User Name">
        <input type="password" id="password" placeholder="Password">
        <input type="submit" name="submit" id="sub" value="Submit">
      </form>
    </div>
</section>
</body>
</html>
