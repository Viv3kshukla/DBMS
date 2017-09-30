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
		<link rel="stylesheet" href="nexus.css" rel="stylesheet">
		<style>
			.jumbotron{
				background-color:#d8d2d2;
				color:black;
				margin-right:300px;
			}
		</style>
	</head>
	<body>
	<!--	<nav class="navbar navbar-inverse">
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


		-->


 <div class="container">
	 <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo 
					<h1 class="navbar-brand">
					<img src="name.jpg" style="width:7cm;height:1.5cm; border-radius: 50%; ">
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-left" role="navigation">

                  <img src="name.jpg" style="width:7cm;height:1.5cm; border-radius: 50%; ">
                  </nav>
                <nav id="navigate" class="collapse navbar-collapse navbar-right" role="navigation">
                
                    <ul id="nav " class="nav navbar-nav navbar-right" >
                        <li></li>
                        
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                     </ul>  
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        </div>

        <div class="container" style="margin-left: 0.5cm; " id="body-bg">
			
		


     	<div class="col-md-3 " style="margin-top: 3cm; padding: 0cm 0cm 0cm 0cm; margin-right:0cm; ;box-shadow: 5px 5px 15px grey; flex:0 1 25%;">
                            <ul class="list-group sidebar-nav" id="sidebar-nav">
                                <!-- Typography -->
                               
                                <li class="list-group-item"><a href="main_page.php"><span class="glyphicon glyphicon-home"></span> &nbsp;Home </a></li>
      				<li class="list-group-item"><a href="acc_details.php">Account Details</a></li>
      				<li class="list-group-item"><a href="user_details.php">User Details</a></li>
      				<li class="list-group-item"><a href="loan_apply.php">Apply for loan</a></li>
      				<li class="list-group-item"><a href="loan_details.php">Loan details</a></li>
      				<li class="list-group-item"><a href="transactionPage.php">Transaction Page</a></li>
      				<li class="list-group-item"><a href="mini_statement.php">Mini Statement</a></li>
                            </ul>
     </div>








 <div class="col-md-9" style="margin-top: 3cm;padding-left:1cm;">
















		<div class="container">
			<div class="page-header">
				<h4> <?php echo "Hello ".$_SESSION['username']."<br>"; ?></h4>
			</div>
			<div class="jumbotron">
				<p>Internet banking website. </p>
				<?php 
					$username1=$_SESSION['username'];
					include 'connect.php';
					$sql="SELECT account.ACCOUNT_NUMBER,account.ACCOUNT_TYPE,customer.CUST_NAME,account.BALANCE,account.START_DATE,branch.BRANCH_NAME FROM login,account,customer,branch WHERE login.USERNAME=customer.LOGIN_ID AND account.BRANCH_ID=branch.BRANCH_ID AND customer.CUST_ID=account.CUST_ID AND USERNAME='$username1'";
					$result=mysqli_query($conn,$sql);
					if($result){	$row=mysqli_fetch_assoc($result); ?>
						<table class="table table-hover">
    						<thead>
    							<tr>
     								<th>Account no.</th>
      								<th>Customer name</th>
      								<th>Account type</th>
        							<th>branch name</th>
      							</tr>
    						</thead>
    						<tbody>
    						  	<tr>
     							   <td><?php echo $row['ACCOUNT_NUMBER']; ?></td>
    							    <td><?php echo $row['CUST_NAME']; ?></td>
    							    <td><?php echo $row['ACCOUNT_TYPE']; ?></td>
        							<td><?php echo $row['BRANCH_NAME']; ?></td>
      							</tr>
      
    						</tbody>
 						</table>
					<?php	
						}
						else{
							echo "There has been some error in accessing data <br>".mysqli_error($conn);
						}
					?>
					<form action="state_res.php" method="post">
						<div class="form-group">
      						<label for="start_date">Start Date:</label>
      						<input type="date" class="form-control" id="start_date" placeholder="Enter email" name="S_DATE" required/>
    					</div>
    					<div class="form-group">
      						<label for="end_date">End Date :</label>
      						<input type="date" class="form-control" id="end_date" placeholder="Enter password" name="E_DATE" required/>
    					</div>

    					<button type="submit" class="btn btn-default">Submit</button>
					</form>

			</div>
		</div>
		</div>
		</div>
	</body>
</html>
