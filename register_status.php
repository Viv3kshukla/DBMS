<?php
	if(!empty($_POST['USERNAME'])){
	$username1=$_POST['USERNAME'];
	$password1=$_POST['PASSWORD'];
	$password_again=$_POST['PASSWORD_AGAIN'];
	if($password1!=$password_again){
		include 'register.php';
		echo "<center> <br> Passwords does not match<br></center>";
		exit();
	}
	else{
		session_start();
		require 'connect.php';
		$branch_id=$_POST['BRANCH_ID'];
		$sql="SELECT * FROM branch WHERE BRANCH_ID='$branch_id'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		}else{
			echo "error getting error ".mysqli_error($conn);
		}
		if($number>0){

			$sql="SELECT * FROM login WHERE USERNAME='$username1'";
			$result=mysqli_query($conn,$sql);
			if($result){
				$number=mysqli_num_rows($result);
			}else{
				echo "error getting error ".mysqli_error($conn);
			}
			if($number>0){
				include 'register.php';
				echo "<center> <br> Username already exists <br></center>";
				exit();
			}
			else{
				$name=$_POST['CUST_NAME'];
				$sex=$_POST['SEX'];
				$email=$_POST['EMAIL'];
				$city=$_POST['CITY'];
				$state=$_POST['STATE'];
				$street=$_POST['STREET'];
				$date_of_birth=date('Y-m-d', strtotime($_POST['DATE_OF_BIRTH']));
				$pincode=$_POST['PINCODE'];
				$mobile_no=$_POST['MOBILE_NO'];
				$account_type=$_POST['ACCOUNT_TYPE'];
				$sql2="INSERT INTO login(USERNAME,PASSWORD) VALUES ('$username1','$password1')";
				$result2=mysqli_query($conn,$sql2);
				if($result2){
						$sql1="INSERT INTO customer(CUST_NAME,DATE_OF_BIRTH,SEX,EMAIL,MOBILE_NO,STATE,CITY,STREET,PINCODE,LOGIN_ID) VALUES ('$name','$date_of_birth','$sex','$email','$mobile_no','$state','$city','$street','$pincode','$username1')";
						$result1=mysqli_query($conn,$sql1);
						if($result1){
						}else{
							echo "error".mysqli_error($conn);
						}
						$sql4="SELECT CUST_ID FROM customer,login WHERE LOGIN_ID=USERNAME AND USERNAME='$username1'";
						$result4=mysqli_query($conn,$sql4);
						
						if (mysqli_num_rows($result4)==1) {
		    				$row = mysqli_fetch_assoc($result4);
		        			$cust_id=$row['CUST_ID'];
		    			}
						else {
		    				echo "There must be some in your data base like ".mysqli_error($conn);
						}

						$start_date=date('Y-m-d');
						$balance=0;
						$sql3="INSERT INTO account(START_DATE,BALANCE,BRANCH_ID,CUST_ID,ACCOUNT_TYPE) VALUES ('$start_date','$balance','$branch_id','$cust_id','$account_type')";
						$result3=mysqli_query($conn,$sql3);

						if($result3){
						
						}
						else{
							echo "error ".mysqli_error($conn);
						}
				}
				else{
					echo "Connection Error ".mysqli_error($conn);
				}
				
			//	echo "checkpoint 5<br>";
			}
		}
		else{
			echo "Connection Error ".mysqli_error($conn);
		} 
			
		}
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>India Finance</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style>
			.jumbotron{
				background-color:#2e2d88;
				color:white;
				margin-right:400px;
			}
			.navbar-inverse.navbar-brand{
				color:red;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<h4> <?php echo "Success<br>"; ?></h4>
			</div>
			<div class="jumbotron">
				
			<p><a href="home.html">Click here to visit homepage</a></p>
				

			</div>

		</div>
	</body>
</html>
