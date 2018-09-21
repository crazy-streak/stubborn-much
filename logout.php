<?php
//This page is done by Aravind Srinivasan.
//This page's functionality is to perfom the backend operations regarding the logout process.
//Session variables are destroyed here for security reasons.
//Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
	if(!isset($_POST['submit']))
	{
		header('Location: ../lb.php');
		exit();
	}
	else
	{
		session_start();
		session_unset();
		session_destroy();
		header('Location: ../login2.php?loggedout');
		exit();

	}