<?php
	if($_GET["action"] === "set")
		setcookie($_GET["name"], $_GET["value"], time() + 3600);
	else if ($_GET["action"] === "get")
	{
		if(isset($_COOKIE[$_GET["name"]]))
			echo $_COOKIE[$_GET["name"]] . "\n";
	}
	else if ($_GET["action"] === "del")
		setcookie($_GET["name"], $_COOKIE[$_GET["name"]], time() - 3600);
	else
		exit();
?>
