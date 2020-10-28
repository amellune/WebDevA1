<?php
	//logout.php
	session_start();
 	session_destroy();
?>
<p>You have successfully logged out</p>
<a href="landing.php">Login here</a>
