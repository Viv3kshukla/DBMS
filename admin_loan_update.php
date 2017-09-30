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
				<h4> <?php echo "Hello Admin".$_SESSION['username']."<br>"; ?></h4>
			</div>
			<?php
				require 'connect.php';
				$sql="SELECT * FROM loan WHERE LOAN_STATUS='pending'";
				$result1=mysqli_query($conn,$sql);
				$row1=mysqli_fetch_assoc($result1);
			?>
			<div class="jumbotron" style="background-color:#ffff66;
				color:black;
				margin-right:300px;">
				<form action="admin_update.php" method="post">
				
				<div class="form-group">
      				<label for="loan_id">Loan Id :</label>
      				<input type="text" class="form-control" id="loan_id" placeholder="Enter Loan id" name="LOAN_ID" required/>
    			</div>
    			<div class="form-group">
      				<label for="status">Status :</label>
      				<select id="status" name="LOAN_STATUS">
    					<option value="pending">Pending</option>
    					<option value="successful">Successful</option>
  					</select>
    			</div>

    			<button type="submit" class="btn btn-success" value="update" name="status">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    			<button type="submit" class="btn btn-danger" value="reject" name="status">Reject</button>

			</form>
											
					

			</div>
			
		</div>
	</body>
</html>
