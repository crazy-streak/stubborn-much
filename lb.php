<!DOCTYPE html>
<!--
This part of the task has been done by Aravind Srinivasan(myself).
In this part the data is retrieved from the databasse and is displayed in a sorted order.
Logout and Add memebers Functioinality has been provided for the logged in users.
Session variable have also been used to prevent the unauthorised access to the page
//Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
-->
<html lang="en">
<head>
  <title>LeaderBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="lb.css">
 </head>
 <body>
	<?php
		
		
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "1234567890";
		$db = "leaderboard";
// Create connection
		$conn = mysqli_connect($servername, $username, $password, $db);

		if (!isset($_SESSION['uid'])) {
			header('Location: login2.php');
			exit();
		}
// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
//echo "Connected successfully<br>";
		$i=1;
		$sql= "SELECT * FROM content ORDER BY marks DESC";
		$result = mysqli_query($conn,$sql); 
		$num = mysqli_num_rows($result);
		?>
	<!--	Navigation Bar -->
	<nav class="navbar navbar-expand-sm navbar-dark " style ="background-color: #ffffff;">
		<a class ="navbar-brand" href="#"><img src="logo.png" alt="..." height="60px" width="250px"></a>	
		<ul class="navbar-nav w-100 justify-content-end">
			<li class="nav-item">
				<form action="Login/logout.php" method="POST">	
				<button type="submit" class="btn btn-primary" value="Logout" name="submit">Logout</button>&nbsp
				</form>				
			</li>
			<li class="nav-item">
				<form action="form.php" method="POST">	
				<button type="submit" class="btn btn-primary" value="addmem" name="submit">Add Members</button>
				</form>				
			</li>
		</ul>
	</nav>
	<!--  LeaderBoard -->
	<div class="bg">
		<div class="container-fluid">
			<div class="row">
			<div class="col"><br><br></div>
			</div>
			<div class="row justify-content-md-center">
			<div class="col-md-auto">
			<div class="card cc" style="width:700px">
				<div class="card-body">
					<?php
					$row=mysqli_fetch_row($result);
					$f1=$row[0];
					$f2=$row[1];
					?>
					<div class="row">
					<div class="col">
					<h1 class="lb"> Leaderboard </h1>
					</div>
					</div>
					<div class="row">
						<div class="col-1 first d-flex flex-row cc p-2 ">
						<div class="p-2  top"> <img src="Crown.png" alt="..." height="26px" width="26px"> </div>
						</div>
						<div class="col-11 first d-flex flex-row cc p-2 justify-content-between">
						<div class="p-2 flex-grow-1 top"><img src="p1.svg" alt="..." class="img-round" height="26px" width="26px"> &nbsp <?php echo $f1 ?> </div>
						<div class="p-2 top"> <?php echo $f2 ?> </div>
						</div>
					</div>
					<?php
					$i=2;
					while($row = mysqli_fetch_row($result)){
					$f1=$row[0];
					$f2=$row[1];
					?>
					<div class="row ">
						<div class="col-1 others d-flex flex-row p-2 cc">
						<div class="p-2 flex-grow-1 bg-white text-center"> <?php echo $i ?> </div>
						</div>
						<div class="col-11 others d-flex flex-row cc p-2 justify-content-between">
						<div class="p-2 flex-grow-1 bg-white"><img src="p1.svg" alt="..." class="img-round" height="26px" width="26px"> &nbsp <?php echo $f1 ?> </div>
						<div class="p-2 bg-white"> <?php echo $f2 ?> </div>
						</div>
					
					</div>
					<?php
					$i++;
					}?>
					
				</div>
			</div>
			</div>
			</div>
	</div>
</body>
 </html>