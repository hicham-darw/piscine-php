<?php
	function auth($login, $passwd)
	{
		if(!$login && !$passwd)
			return false;
		if($file_content = file_get_contents("/home/darwin/Desktop/1337/piscine-php/d04/ex01/private/passwd"))
		{
			if(!$file_content)
			{
				echo "has no content in the file";
				exit();
			}
			else
				$user_login = unserialize($file_content);
			if($user_login['login'] == $login && 							    $user_login['passwd'] == hash("whirlpool", $passwd))
				return true;
			else
				return false;	
		}
		else
			return false;
	}
?>
