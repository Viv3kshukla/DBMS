<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	if($password!=$password_again){
		include 'register.php';
		echo "<center> <br> Passwords does not match<br></center>";
		exit();
	}
	else{
		session_start();
		require 'connect.php';
		$sql="INSERT INTO Users VALUES ('$username','$password')";
		$result=mysqli_query($conn,$sql);
		if($result){
			include 'login_form.php';
			echo "you are successfully registered now login here  enjoy our services .";
			exit();
		}
		else{
			echo "Connection Error ".mysqli_error($conn);
		}

	}
?>