<?php
	error_reporting(0);
	session_start();
	if((!empty($_SESSION['username']))&&(!empty($_SESSION['password']))){
		$login=$_SESSION['username'];
		$password=$_SESSION['password'];
		require 'connect.php';
		$sql="SELECT * FROM admin WHERE username='$login' AND password='$password'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		}else{
			echo "error getting error ".mysqli_error($conn);
		}
		if($number==1){
			
			$_SESSION['start_time']=time();
			$_SESSION['auth']=1;
			header('location:admin_page.php');

		}
		else{
			include 'admin_login.php';
			echo "<center>Incorrect Username and Password!! <br></center>";
			exit();
		}

	}
?>