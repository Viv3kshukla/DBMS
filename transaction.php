<?php
	error_reporting(0);
	session_start();
	if((!empty($_SESSION['username']))&&(!empty($_SESSION['password']))){
		$login=$_SESSION['username'];
		$password=$_SESSION['password'];
		require 'connect.php';
		$account_to=$_POST['ACCOUNT_TO'];
		$amount=$_POST['AMOUNT'];
		$purpose=$_POST['PURPOSE'];
		mysqli_query("BEGIN");
		$sql="SELECT * FROM account WHERE ACCOUNT_NUMBER='$account_to'";
		$result=mysqli_query($conn,$sql);
		if($result){
			$number=mysqli_num_rows($result);
		//	echo "the number is $number<br>";
		}else{
			mysqli_query("ROLLBACK");
			echo "error ".mysqli_error($conn);
		
		}
		if($number==1){
			$row=mysqli_fetch_assoc($result);
			$cust_id=$_SESSION['user_id'];
				$sql1="SELECT * FROM account WHERE CUST_ID='$cust_id'";
				$result1=mysqli_query($conn,$sql1);
				if($result1){
					$row1=mysqli_fetch_assoc($result1);
					$account_from=$row1['ACCOUNT_NUMBER'];
					$account_type=$row1['ACCOUNT_TYPE'];
					$curr_date=date('Y-m-d');
					$balance=$row1['BALANCE'];
					if($balance>$amount){
						$balance=$balance-$amount;
						$sql8="SELECT SUM(DEBIT) AS A FROM transaction GROUP BY ACCOUNT_NUMBER,TRANS_DATE HAVING ACCOUNT_NUMBER='$account_from' AND TRANS_DATE='$curr_date'";
						$result8=mysqli_query($conn,$sql8);
						if($result8){
							$row2=mysqli_fetch_assoc($result8);
							$amt=$row2['A'];
							$total=$amt+$amount;
							if($account_type=="savings" AND $total>10000){
								mysqli_query("ROLLBACK");

								$message="Cannot transfer money more than 10000 in a day";
							}
							else{
								$query1="UPDATE account SET BALANCE='$balance' where ACCOUNT_NUMBER='$account_from'";
								$result4=mysqli_query($conn,$query1);
								if($result4){
									$row['BALANCE']=$row['BALANCE']+$amount;
									$balance_to=$row['BALANCE'];
									$query2="UPDATE account SET BALANCE='$balance_to' where ACCOUNT_NUMBER='$account_to'";
									$result5=mysqli_query($conn,$query2);
									if($result5){
										mysqli_query("COMMIT");
										$message="transaction was successful";
										$trans_date=date('Y-m-d');
										$cust_id2=$row['CUST_ID'];
										$description="Amount $amount Credited from account number $account_from for $purpose";
										$sql4="INSERT INTO transaction( CREDIT,TRANS_DATE,ACCOUNT_NUMBER,ACCOUNT_TO,DESCRIPTION,CUST_ID) VALUES('$amount','$trans_date','$account_from','$account_to','$description','$cust_id2')";
										$description1="Amount $amount Dredited transfered to account number $account_to for $purpose";
										$sql5="INSERT INTO transaction( DEBIT,TRANS_DATE,ACCOUNT_NUMBER,ACCOUNT_TO,DESCRIPTION,CUST_ID) VALUES('$amount','$trans_date','$account_from','$account_to','$description1','$cust_id')";
										$result7=mysqli_query($conn,$sql5);
										$result6=mysqli_query($conn,$sql4);
								
							}
							else{
								mysqli_query("ROLLBACK");
								$message="transaction was unsuccessfull";
								echo "Error: 1+++ ".mysqli_error($conn);
							}

						}
						else{
							mysqli_query("ROLLBACK");
							$message="transaction was unsuccessfull";
							echo "Error: 1+++ ".mysqli_error($conn);
						}
							}
						}
						else{
							mysqli_query("ROLLBACK");
							echo mysqli_error($conn);
						}
						
						
					}
					else{
						mysqli_query("ROLLBACK");
						$message="Insufficient balance";
					}
				}
				else{
					mysqli_query("ROLLBACK");
					$message=mysqli_error($conn);
				}
			}
			else{
				mysqli_query("ROLLBACK");
				$message="Invalid Account Number";
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
			<link rel="stylesheet" href="nexus.css" rel="stylesheet">
		<style>
			.jumbotron{
				background-color:#2e2d88;
				color:white;
				margin-right:300px;
			}
			.navbar-inverse.navbar-brand{
				color:red;
			}
		</style>
	</head>
	<body>
		
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
				<?php
					echo $message;
				?>
			</div>
		</div>
		</div>
		</div>

	</body>
</html>