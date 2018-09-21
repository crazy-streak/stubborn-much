<!doctype html>
<!--
  This page is done by Isha Sharma(My Teammate : Team_id:15).
  This page contains the front end part of the login page.s
  In this file some php and javascript elements are added for the purpose of form validation and security. 
  Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </head>
  <script src="script.js">  </script>
  <?php
    session_start();
    session_unset();
    session_destroy();
    ?>
  <body background="bg2.jpg">
  <div id="login">
  <div class="container">
    <div class="row"><br> <br><br><br><br> </div>
    <div class="row justify-content-md-center">
      <div clas="col-md-auto" style="width:500px">
      <div class ="jumbotron">
        <h1>
          <b>
            <p style="color:black;">LOGIN</p>
          </b>
        </h1>
        <form name="myform" action="Login/login.php" method="POST" onsubmit="return validate()">
        <div class="form-group">
          <hr>
          
            <form class=form-horizontal style ="margin-left: 50px">
              <div class="form-group input-group">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-user"></span>
                </span>
                <input type ="text" class="form-control" name="Name" placeholder="Enter your name here">
              </div>
              <div class ="form-group input-group">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-user"></span>
                </span>
                <input type="password" class="form-control" name="Password" placeholder="Enter password">
    	        </div>
              <div class="form-group">
                <label>
                  <input type="checkbox">
                      Always remember me
                </label>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>
              </div>
              <div class="form-group">
                <a href="#">Signup! Its free.</a>
              </div>  
          </form>
    </div>
  </form>
  </div>
</div>
</div>
</div>
</div>

</body>
</html>

