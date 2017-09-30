
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div style="text-align:center; color:teal; font-family:monospace;background-color:black;">
			<?php
				session_start();
				if(!empty($_POST['withdraw_mon'])){
					$withdraw=$_POST['withdraw_mon'];
					if($withdraw<=$_SESSION['account']){
						$_SESSION['account']=$_SESSION['account']-$withdraw;
						echo "the amount is ".$_SESSION['account']."<br>";
					}
					else{
						echo "<center><div style=\"font-size:40px;color:red;\"> YOUR BALANCE IS INSUFFICIENT </div> </center> ";
					}
					
				}
				else{
					echo "<center><div style=\"font-size:40px;color:red;\"> 404 NOT FOUND </div> </center> ";
				}
			?>
		</div>
	</body>
</html>
