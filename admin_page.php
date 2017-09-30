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
				background-color:#99ccff;
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
				<h4> <?php echo "Hello ".$_SESSION['admin_name']."<br>"; ?></h4>
			</div>
			<div class="jumbotron">
			<table class="table table-striped">
    						<thead>
    							<tr>
     								<th>Click Here to See Loan Details</th>
      								<th></th>
      								<th>Cust id</th>
        							<th>Branch Id</th>
        							<th>Account type</th>
        							<th>Start date</th>
      							</tr>
    						</thead>
    						<tbody>
      						</tbody>
 						</table>
				<p>Well Hello internet banking website. </p>
				<p><a href="admin_loan.php" style="align:center;">Click here to move to loan page</a></p>
			</div>
		</div>
	</body>
</html>
