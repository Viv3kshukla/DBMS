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
    			  <a class="navbar-brand" href="#">VivekGroups Bank</a>
    			</div>
    			<ul class="nav navbar-nav">
     				<li class="active"><a href="main_page.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Home </a></li>
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
     								<th>Account Number</th>
      								<th>Balance</th>
      								<th>Cust id</th>
        							<th>Branch Id</th>
        							<th>Account type</th>
        							<th>Start date</th>
      							</tr>
    						</thead>
    						<tbody>

					<?php
						$sql1="SELECT * FROM ORDER BY ACCOUNT_NUMBER DESC";
						$result1=mysqli_query($conn,$sql1);
						if($result1){ while($row1=mysqli_fetch_assoc($result1)){ ?>
							
    					
    						  	<tr>
     							   <td><?php echo $row1['ACCOUNT_NUMBER']; ?></td>
    							    <td><?php echo $row1['BALANCE']; ?></td>
    							    <td><?php echo $row1['CUST_ID']; ?></td>
        							<td><?php echo $row1['BRANCH_ID']; ?></td>
        							<td><?php echo $row1['ACCOUNT_TYPE']; ?></td>
        							<td><?php echo $row1['START_DATE']; ?></td>


      							</tr>
      					<?php	
								}
							}
							else{
								echo "There has been some error in accessing data <br>".mysqli_error($conn);
							}
						?>
      						</tbody>
 						</table>
				<p>Well Hello internet banking website. </p>
				<p>

				</p>

			</div>
		</div>
	</body>
</html>
