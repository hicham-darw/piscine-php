<?php
	session_start();
	include ("my_functions/ft_split_logs.php");
	if(isset($_POST["login"]) && isset($_POST["passwd"]))
	{
		$login = $_POST['login'];
		$pass = hash('whirlpool', $_POST['passwd']);
		if(file_exists("private/passwd"))
		{
			$content = file_get_contents("private/passwd");
			$logs = ft_split_logs($content);
			foreach($logs as $value)
			{
				$tmp = unserialize($value);
				if($tmp['login'] === $login && $tmp['passwd'] === $pass)
				{
					$_SESSION['loggued_on_user'] = $login;
					header('location: frames.html');
					exit();
				}
			}
		}
		else
			echo "1ERROR\n";
	}
	else
		echo "2ERROR\n";
?>
