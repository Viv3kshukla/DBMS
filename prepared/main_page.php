<?php
	error_reporting(0);
	session_start();
	include 'session_expire.php';
	if($_SESSION['auth']!=1){
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
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
    	  			<a class="navbar-brand" href="#">WebSiteName</a>
    			</div>
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="#">Home</a></li>
      				<li><a href="#" >Open</a></li>
      				<li><a href="#">Page 2</a></li>
      				<li><a href="#">Page 3</a></li>
    			</ul>
  			</div>
		</nav>
		<div class="container">
			<div class="page-header">
				<h1> <?php echo "Hello ".$_SESSION['user_id']."<br>"; ?></h1>
			</div>
			<div class="jumbotron">
				<p>hey now brown cowhey now brown cowheyhey now brown cow hey now brown cow hey now brown cow hey now brown cow  </p>
				<p></p>
				<p>
					<a href="#" class="btn btn-default" role="button">More Info</a>
					<button type="submit" class="btn btn-danger" role="button">Button</button>
					<button type="submit" class="btn btn-success " >Button</button>
					<button type="submit" class="btn btn-primary " role="button">Button</button>
					<button type="submit" class="btn btn-warning" role="button">Button</button>
					<button type="submit" class="btn btn-link " role="button">Button</button>
					<button type="submit" class="btn btn-danger" >Button</button>
					<button type="button" class="btn btn-primary" disabled="disabled">Button</button>
				</p>
			</div>
		</div>
	</body>
</html>
