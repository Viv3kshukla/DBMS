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
     				<li ><a href="admin_loan_1.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Loan </a></li>
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
				

				<p><a href="admin_loan_1.php" style="align:center;">Click here to see the pending loans</a></p>

			</div>

		</div>
	</body>
</html>
