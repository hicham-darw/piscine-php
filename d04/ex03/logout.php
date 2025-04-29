<?php
	session_unset();
	session_destroy();
	if(isset($_COOKIE["user"]))
		setcookie($_COOKIE["user"], "",  time() - 3600);

?>
