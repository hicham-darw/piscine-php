<?php
		session_start();
		include "my_functions/ft_split_logs.php";
		date_default_timezone_set('Africa/Casablanca');
		if(file_exists("private/chat"))
		{
			if(isset($_SESSION['loggued_on_user']))
			{
				$file = fopen('private/chat', 'r');
				$cntnt = file_get_contents('private/chat');
				$chat = ft_split_logs($cntnt); 
				foreach($chat as $msg)
				{
				 	$unserial = unserialize($msg);
					echo "[".date("h:i", $unserial["time"])."] ";
					echo "<b>".$unserial['login'].": </b>";
					echo $unserial['msg']." <br />\n";
				}
				flock($file, LOCK_SH);
				fclose($file);
			}
			else
				echo "ERROR\n";
		}		
?>

