<?php
	//This part of the task is done by Aravind Srinivasan(myself).
	//This section is used to establish a connection to to the database.
	//Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
	$server = "localhost";
	$user = "root";
	$pass = "1234567890";
	$db = "leaderboard";
	$conn = mysqli_connect($server, $user, $pass, $db);
?>