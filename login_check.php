<?php
	error_reporting(0);
	session_start();
	if((!empty($_SESSION['username']))&&(!empty($_SESSION['password']))){
		$login=$_SESSION['username'];
		$password=$_SESSION['password'];
		require 'connect.php';
		$sql="SELECT * FROM login WHERE USERNAME='$login' AND PASSWORD='$password'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		}else{
			echo "error getting error ".mysqli_error($conn);
		}
		if($number==1){
			
			$_SESSION['start_time']=time();
			$sql1="SELECT CUST_ID from customer WHERE LOGIN_ID='$login'";
			$result1=mysqli_query($conn,$sql1);
		//	$_SESSION['user_id']=$login;
			if($result1){
				$row=mysqli_fetch_assoc($result1);
				$_SESSION['user_id']=$row['CUST_ID'];
			}
			else{
				echo "error getting error ".mysqli_error($conn);
			}
			$_SESSION['auth']=1;
			header('location:main_page.php');

		}
		else{
			include 'demo.php';
			echo "<center>Incorrect Username and Password!! <br></center>";
			exit();
		}

	}
?>