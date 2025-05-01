<?php
	include ("my_functions/ft_split_logs.php");
	if(isset($_POST['login']) && isset($_POST['oldpw']) && isset($_POST['newpw']))
	{
		$status = false;
		$new_log['login'] = $_POST['login'];
		$new_log['passwd'] = hash('whirlpool', $_POST['newpw']);
		$content = file_get_contents('private/passwd');
		$logs =	ft_split_logs($content);
		
		file_put_contents('private/passwd', "");
		foreach($logs as $value)
		{
			$tmp = unserialize($value);
			if($tmp['login'] === $_POST['login'] && 							$tmp['passwd'] === hash('whirlpool', $_POST['oldpw']))
			{
				file_put_contents('private/passwd', serialize($new_log)										  , FILE_APPEND);
				$status = true;
			}
			else
				file_put_contents('private/passwd', $value										         , FILE_APPEND);
		}
		if($status = true)
			header('location: index.html');
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>
