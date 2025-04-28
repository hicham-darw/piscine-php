<?php

	if($_POST['login'] && $_POST['passwd'] && $_POST['submit'])
	{
		$users_login = array();
		$users_login['login'] = $_POST['login'];
		$users_login['passwd'] = hash("whirlpool", $_POST['passwd']);
		$serialized = serialize($users_login);
		$content = file_get_contents("private/passwd");
		if(!file_exists("private/passwd"))
			file_put_contents("private/passwd", $serialized.$str_hash);
		else
		{
			$content = file_get_contents("private/passwd");
			if(preg_match("/$serialized/", $content))
			{
				echo "ERROR\n";
				exit();
			}
			else
				file_put_contents("private/passwd", $content."\n"
									  .$serialized);
		}
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>
