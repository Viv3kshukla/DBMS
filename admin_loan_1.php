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
				<h4> <?php echo "Hello ".$_SESSION['admin_name']."<br>"; ?></h4>
			</div>
			<?php
				require 'connect.php';
				$sql="SELECT * FROM loan WHERE LOAN_STATUS='pending'";
				$result1=mysqli_query($conn,$sql);
			?>
			<div class="jumbotron" style="background-color:#ffff66;
				color:black;
				margin-right:300px;">
					<table class="table table-striped">
    						<thead>
    							<tr>
    								<th>Loan id</th>
    								<th>Loan date</th>
    								<th>Amount</th>
    								<th>Branch id</th>
     								<th>Cust id</th>
      								<th>Loan type</th>
      								<th>Loan Status</th>
      							</tr>
    						</thead>
    						<tbody>

					<?php
						if($result1){ while($row1=mysqli_fetch_assoc($result1)){ ?>
							
    					
    						  	<tr>
     							   <td><?php echo $row1['LOAN_ID']; ?></td>
    							    <td><?php echo $row1['LOAN_DATE']; ?></td>
    							    <td><?php echo $row1['AMOUNT']; ?></td>
        							<td><?php echo $row1['BRANCH_ID']; ?></td>
        							<td><?php echo $row1['CUST_ID']; ?></td>
        							<td><?php echo $row1['LOAN_TYPE']; ?></td>
        							<td><?php echo $row1['LOAN_STATUS']; ?></td>
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
 					<p><a href="admin_loan_update.php" style="align:center;">Click here to Update Loan</a></p>							
					

			</div>
			
		</div>
	</body>
</html>
