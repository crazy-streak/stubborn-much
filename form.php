<?php
//This part of the task is made by Aravind Srinivasan(myself)
//This page contains the php code regarding adding the members in the database feature available for logged in users.
//Here again session variables are used for the security reasons.
//Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
session_start();
$nameerr=$name="";
$mark=0;	
if (!isset($_SESSION['uid'])) {
			header('Location: login2.php');
			exit();
}
else {
$servername = "localhost";
$username = "root";
$password = "1234567890";
$dbname = "leaderboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
if (isset($_POST['name'])) {
	$name=$_POST['name'];
}
if(isset($_POST['mark']))
{	$mark=$_POST['mark'];
}
$sqlcheck="SELECT * FROM content WHERE Name='$name'";
$res=mysqli_query($conn,$sqlcheck);
if(mysqli_num_rows($res)>0)
{
	$nameerr="Name Already exists";
	$name="";
}
$sql = "INSERT INTO content (Name,Marks) VALUES ('$name',$mark)";
if(!empty($name))
{
if (mysqli_query($conn, $sql)) {
    $message="New record added Succesfully";
    echo "<script type='text/javascript'> alert('$message')</script>";
 }
}
 }
mysqli_close($conn);
}
?>
<html>
<style type="text/css">
	.error{
		color: #FF0000;
		font-size: 10px;
	}
</style>
<head>
	<title>Add Members</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
	<style type="text/css">
		.lb{
	font-family: 'Pacifico', cursive;
	}
	</style>
</head>
<body background="bg2.jpg">
	 <div class="container">
    <div class="row"><br> <br><br><br><br> </div>
    <div class="row justify-content-md-center">
      <div clas="col-md-auto" style="width:400px">
		<div class="card cc">
			<div class="card-body">
				<h1 class="lb">Add Members</h1>
				<br><br>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			Name : <input type="text" name="name"><span class="error">* <?php echo $nameerr;?></span> <br><br>
			Marks : <input type="text" name="mark"> <br><br>
			<input type="submit" name="submit"><br><br>
			<a href="lb.php">Go back</a>
			</form>
			</div>
		</div>
	  </div>
	 </div>
	</div>
</body>
</html>