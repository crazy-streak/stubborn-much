<?php
	//This part of the task is done by Aravind Srinivasan(myself).
	//This page maintains the backend processes regarding the login of a registered user.
	//All Error handlers have been included to avoid any problems during login
	//Please create the databse and the tables with the exact same names as used in the code for the code to work properly.
	if (isset($_POST['submit'])) {
		session_start();
		include_once 'config.php';
		//$username = mysql_real_esape_string($conn,$_POST['Name']);
		//$pwd = mysql_real_esape_string($conn,$_POST['Password']);
		$username=$_POST['Name'];
		$pwd=$_POST['Password'];
		$s = "SELECT * FROM admin WHERE user='$username'";
		$res = mysqli_query($conn,$s);
		$checkres = mysqli_num_rows($res);
		if ($checkres==1) {
			if ($row = mysqli_fetch_assoc($res)) {
				if ($pwd==$row['pwd']) {
					$_SESSION['uid']=$row['user'];
					header('Location: ../lb.php');
					exit();
				}
				else
				{
					header('Location: ../login2.php?login=wrong_cred');
						exit();	
				}
			}
		}
		else
		{
			header('Location: ../login2.php?login=wrong_cred');
			exit();	
		}

	} else {
		header('Location: ../login2.php');
		exit();
	}
?>