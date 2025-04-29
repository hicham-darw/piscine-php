<?php
	include "namedauth.php";
	session_start();
	if($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['loggued_on_user'] = $_GET['login'];
		setcookie("user", $_GET['login'], time() + (60*60*24*30));
		echo "OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
	}
?>
