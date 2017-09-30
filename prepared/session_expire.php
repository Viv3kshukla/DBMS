<?php
	if(isset($_SESSION['start_time']) && (time()-$_SESSION['start_time'])>5)
	{
		echo "Session Expired!! You need to login
			again.<br/>";
		session_unset();
		echo"<a href=\"demo.php\">Click here to
			login</a>";
		exit();
	}
?>