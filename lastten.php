<?php
	error_reporting(0);
	session_start();
	include 'session_expire.php';
	if($_SESSION['auth']!=1){
		header('location:home.html');
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
				background-color:#99ccff;
				color:white;
				margin-right:300px;
			}
			.navbar-inverse.navbar-brand{
				color:red;
			}
		</style>
	</head>
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
			<?php
				require 'connect.php';
				$cust_id=$_SESSION['user_id'];
				$sql="SELECT * FROM customer WHERE CUST_ID='$cust_id'";
				$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($result);
				$name=$row['CUST_NAME'];
				$sql2="SELECT * FROM account WHERE CUST_ID='$cust_id'";
				$result2=mysqli_query($conn,$sql2);
				$row1=mysqli_fetch_assoc($result2);
				$branchid=$row1['BRANCH_ID'];
				$sql3="SELECT * FROM branch WHERE BRANCH_ID='$branchid'";
				$result3=mysqli_query($conn,$sql3);
				$row3=mysqli_fetch_assoc($result3);
			?>
			<div class="jumbotron">
				<div style="text-align:center; color:blue; font-family:'Century';font-size:20px;"> Basic Information </div><br><br>
				<p>
					
					<table class="table table-hover table-bordered">
    						<thead style="color:black">
    							<tr>
      								<th>Customer name</th>
        							<th>Account no</th>
        							<th>Branch</th>
        							<th>Branch location</th>
        							<th>Balance</th>
      							</tr>
    						</thead>
    						<tbody>
    						  	<tr>
     							   <td><?php echo $row['CUST_NAME']; ?></td>
    							    <td><?php echo $row1['ACCOUNT_NUMBER']; ?></td>
    							    <td><?php echo $row3['BRANCH_NAME']; ?></td>
    							    <td><?php echo $row3['CITY'];echo ",".$row3['STATE']; ?></td>
        							<td><?php echo $row1['BALANCE']; ?></td>
      							</tr>
    						</tbody>
 						</table>
				</p>

			</div>
			<br>
			<br>
			<div class="jumbotron" style="background-color:#99ccff;
				color:black;
				margin-right:300px;">
				<div style="text-align:center; color:blue; font-family:'Century';font-size:20px;"> Last 10 transactions </div><br><br>
					<table class="table table-striped table-bordered">
    						<thead style="color:black">
    							<tr>
     								<th>Date</th>
      								<th>Narration</th>
      								<th>Debit</th>
        							<th>Credit</th>
      							</tr>
    						</thead>
    						<tbody>

					<?php
						$cust_id=$_SESSION['user_id'];
						$sql1="SELECT * FROM transaction WHERE CUST_ID='$cust_id' ORDER BY TRANS_ID DESC";
						$num=10;
						$result1=mysqli_query($conn,$sql1);
						if($result1){ while($row1=mysqli_fetch_assoc($result1) AND $num>0){ $num=$num-1;?>
							
    					
    						  	<tr>
     							   <td><?php echo $row1['TRANS_DATE']; ?></td>
    							    <td><?php echo $row1['DESCRIPTION']; ?></td>
    							    <td><?php echo $row1['DEBIT']; ?></td>
        							<td><?php echo $row1['CREDIT']; ?></td>
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
					

			</div>
		</div>
	</body>
</html>
