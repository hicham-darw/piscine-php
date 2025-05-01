<?php
	if($_POST['login'] && $_POST['passwd'])
	{
		$new_user = array();
		$new_user['login'] = $_POST['login'];
		$new_user['passwd'] = hash('whirlpool', $_POST['passwd']);
		$serial = serialize($new_user);
		file_put_contents("private/passwd", $serial, FILE_APPEND);
		echo "OK\n";
		header("location: index.html");
	}
	else
		echo "ERROR\n";	
?>
