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
				background-color:#99ccff;
				color:black;
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
      				<li class="list-group-item"><a href="user_details.php">Loan details</a></li>
      				<li class="list-group-item"><a href="transactionPage.php">Transaction Page</a></li>
      				<li class="list-group-item"><a href="mini_statement.php">Mini Statement</a></li>
                            </ul>
     </div>








 <div class="col-md-9" style="margin-top: 2cm;padding-left:1cm;">










		<div class="container">
			<div class="page-header">
				<h4> <?php echo "Hello ".$_SESSION['username']."<br>"; ?></h4>
			</div>
			<div class="jumbotron">
				<div style="text-align:center; color:blue; font-family:'Century';font-size:20px;"> Home Loan </div><br><br>
				<form action="loan_reqst.php" method="post">
    		<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter Email" name="EMAIL" required>
    		</div>
    		<div class="form-group">
      			<label for="mobile">Mobile No:</label>
      			<input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No" name="MOBILE_NO" required>
    		</div>
    		<div class="form-group">
      			<label for="branchid">Branch Id:</label>
      			<input type="number" class="form-control" id="branchid" maxlength="8" placeholder="Enter Branch ID" name="BRANCH_ID" required>
    		</div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" maxlength="8" placeholder="Enter Amount" name="AMOUNT" required>
        </div>
    		<div class="checkbox">
    			<label><input type="checkbox" required> I accept the <a href="conditions.php" target="_blank">Terms and Conditions</a>
           		</label>
    		</div>
        <?php
          $_SESSION['loan_type']=1;
          ?>
				<button type="submit" class="btn btn-danger">Submit</button>
  			</form>

			</div>
		</div>
		</div>
		</div>
	</body>
</html>
