<?php
	$servername="localhost";
	$username="root";
	$pwd="";
	$dbname="banking";
	$conn=mysqli_connect($servername,$username,$pwd,$dbname);
	if(!$conn){
		die("Database connection error ".mysqli_connect_error($conn));
	}
?>