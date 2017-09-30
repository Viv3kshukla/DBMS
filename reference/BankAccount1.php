<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div style="text-align:center; color:teal; font-family:monospace;background-color:black;">
			<?php
	session_start();
	include 'BankAccount.php';
	
	if(isset($_POST['initial_bal'])){
		$initial=$_POST['initial_bal'];
		$A=new BankAccount($initial);
		$A->printAccount();
		$_SESSION['account']=$initial;

	}
	else{
		echo "<center><div style=\"font-size:40px;color:red;\"> 404 NOT FOUND </div> </center> ";
	}
?>
			<br>
			Enter the amount you withdraw <br>
			<form action="Withdraw.php" method="post">
				<center>Amount : <input type="number" placeholder="enter money here" name="withdraw_mon" />
				<br><input type="submit" value="withdraw" />
				</center>
			</form>
			
		</div>
	</body>
</html>