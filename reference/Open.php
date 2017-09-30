<?php
		session_start();
		 include 'session_expire.php';
	?>


<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div align="center">

			<br><br><form action="BankAccount1.php" method="post">
			
				Enter the Initial balance: <input type="number" placeholder="enter amount" name="initial_bal"/>
				<br><input type="submit" value="create" />
			<br>
			</form>
		</div>
	</body>
</html>