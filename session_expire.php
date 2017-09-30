<?php
	if(isset($_SESSION['start_time']) && (time()-$_SESSION['start_time'])>500)
	{
		echo "Session Expired!! You need to login
			again.<br/>";
		session_unset();
		echo"<a href=\"home.html\">Click here to
			login</a>";
		exit();
	}
?>