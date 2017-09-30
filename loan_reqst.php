<?php
	session_start();
	require 'connect.php';
		$mobile=$_POST['MOBILE_NO'];
		$branch_id=$_POST['BRANCH_ID'];
		$amount=$_POST['AMOUNT'];
		$email=$_POST['EMAIL'];
		$sql="SELECT * FROM branch WHERE BRANCH_ID='$branch_id'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		}else{
			echo "error getting error ".mysqli_error($conn);
		}
		if($number==1){
			$cust_id=$_SESSION['user_id'];
			$sql="SELECT * FROM customer WHERE CUST_ID='$cust_id'";
			$result=mysqli_query($conn,$sql);
			if(!$result){
				echo "error getting error ".mysqli_error($conn);
			}
			$row=mysqli_fetch_assoc($result);
			if($email!=$row['EMAIL']){
				$message="email does not match ! Please enter correctly .";
			}
			else if($mobile!=$row['MOBILE_NO']){
				$message="moblile number does not match ! Please enter correctly .";
			}
			else{
				if($_SESSION['loan_type']==1){
					$loan_type="home_loan";
				}
				else if($_SESSION['loan_type']==2){
					$loan_type="car_loan";
				} 
				else if($_SESSION['loan_type']==3){
					$loan_type="personal_loan";
				}
				else if($_SESSION['loan_type']==4){
					$loan_type="education_loan";
				}
				$loan_status="pending";
				$loan_date=date('Y-m-d');
				$sql2="INSERT INTO loan(LOAN_DATE,AMOUNT,BRANCH_ID,CUST_ID,LOAN_TYPE,LOAN_STATUS) VALUES ('$loan_date',$amount,'$branch_id',$cust_id,'$loan_type','$loan_status')";
				$result2=mysqli_query($conn,$sql2);
				if($result2){
					$message="your loan request has been saved";
				}else{
					echo "error".mysqli_error($conn);
				}
			}
		}
		else{
			echo "Connection Error ".mysqli_error($conn);
		} 
?>
<?php
	error_reporting(0);
	session_start();
	include 'session_expire.php';
	if($_SESSION['auth']!=1){
		header('location:welcome.php');
		echo "you are not authenticated . Go to login and start all over again .<br>";
		echo "<a href=\"login_form.php\" >Click here to visit our login page </a>";
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>bootstrap tutorial</title>
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
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
    			  <a class="navbar-brand" href="#">VivekGroups Bank</a>
    			</div>
    			<ul class="nav navbar-nav">
     				<li class="active"><a href="main_page.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Home </a></li>
      				<li><a href="acc_details.php">Account Details</a></li>
      				<li><a href="user_details.php">User Details</a></li>
      				<li><a href="loan_apply.php">Apply for loan</a></li>
      				<li><a href="loan_details.php">Loan details</a></li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    			  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    			</ul>
  			</div>
		</nav>
		<div class="container">
			<div class="page-header">
				<h4> <?php echo "Hello ".$_SESSION['username']."<br>"; ?></h4>
			</div>
			<div class="jumbotron">
				<?php
					echo $message;
				?>
			</div>
		</div>
	</body>
</html>