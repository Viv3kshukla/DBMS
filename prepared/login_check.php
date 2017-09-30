<?php
	session_start();
	if((!empty($_SESSION['username']))&&(!empty($_SESSION['password']))){
		$login=$_SESSION['username'];
		$password=$_SESSION['password'];
		require 'connect.php';
		$sql="SELECT * FROM Users WHERE login_id='$login' AND pass='$password'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		}else{
			echo "error getting error ".mysqli_error($conn);
		}
		if($number==1){
			
			$_SESSION['start_time']=time();
			$_SESSION['user_id']=$login;
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