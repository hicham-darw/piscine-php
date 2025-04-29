<?php
	if(isset($_COOKIE["user"]))
		echo $_COOKIE["user"] . "\n";
	else
		echo "ERROR\n";

?>
