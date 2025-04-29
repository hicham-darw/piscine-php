<?php

	if($_POST['login'] && $_POST['passwd'] && $_POST['submit'])
	{
		$users_login = array();
		$users_login['login'] = $_POST['login'];
		$users_login['passwd'] = hash("whirlpool", $_POST['passwd']);
		$serialized = serialize($users_login);
		$content = file_get_contents("/home/darwin/Desktop/1337/piscine-php/d04/ex01/private/passwd");
		if(!$content)
			file_put_contents("/home/darwin/Desktop/1337/piscine-php/d04/ex01/private/passwd", $serialized);
		else
		{
			if(preg_match("/$serialized/", $content) === 1)
			{
				echo "ERROR\n";
				exit();
			}
			else
				file_put_contents("/home/darwin/Desktop/1337/piscine-php/d04/ex01/private/passwd", $content."\n".$serialized);
		}
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
