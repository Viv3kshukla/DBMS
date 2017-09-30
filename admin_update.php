<?php
	session_start();
	require 'connect.php';
		$loan_id=$_POST['LOAN_ID'];
		$branch_id=$_POST['LOAN_STATUS'];
		$value=$_POST['status'];
		$sql4="SELECT * FROM loan WHERE LOAN_ID='$loan_id'";
		$result4=mysqli_query($conn,$sql4);
		$row1=mysqli_fetch_assoc($result4);
		if(mysqli_num_rows($result4)>0){


		if($value=="reject"){
			$sql="UPDATE loan SET LOAN_STATUS='$value' WHERE LOAN_ID='$loan_id'";
			$result=mysqli_query($conn,$sql);
			$message="successfully rejected";
		}
		else if($value="UPDATE"){
			$up="successful";
			$sql1="UPDATE loan SET LOAN_STATUS='$up' WHERE LOAN_ID='$loan_id'";
			$result2=mysqli_query($conn,$sql1);
			$amt=$row1['AMOUNT'];
			$cust_id=$row1['CUST_ID'];
			$sql5="SELECT * FROM account WHERE CUST_ID='$cust_id'";
			$result5=mysqli_query($conn,$sql5);
			$row5=mysqli_fetch_assoc($result5);
			$acno=$row5['ACCOUNT_NUMBER'];
			$bal=$row5['BALANCE'];
			$bal=$bal+$amt;
			$sql8="UPDATE account SET BALANCE=$bal WHERE ACCOUNT_NUMBER='$acno'";

			$final=mysqli_query($conn,$sql8);
			if($final){
				$message="update was success";
				$trans_date=date('Y-m-d');
				$purpose=$row1['LOAN_TYPE'];
				echo "$purpose";
				$description="Amount $amt Credited by loan $loan_id for $purpose";
				$sql9="INSERT INTO transaction( CREDIT,TRANS_DATE,ACCOUNT_NUMBER,ACCOUNT_TO,DESCRIPTION,CUST_ID) VALUES('$amt','$trans_date','$acno','Admin','$description','$cust_id')";
				$final2=mysqli_query($conn,$sql9);
				if(!$final2){
					echo "error getting error ".mysqli_error($conn);
				}
			}
			else{
				echo "error getting error ".mysqli_error($conn);
			}
		}
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
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
    			  <a class="navbar-brand" href="#">India Finance</a>
    			</div>
    			<ul class="nav navbar-nav">
     				<li class="active"><a href="admin_page.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Home </a></li>
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