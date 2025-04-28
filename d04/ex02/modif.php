<?php
	if(!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || !$_POST['submit'])
	{
		echo "ERROR\n";
		exit;
	}
	else
	{
		$modif_login = array();
		$modif_login['login'] = $_POST['login'];
		$modif_login['oldpw'] = hash("whirlpool", $_POST['oldpw']);
		$content_file = file_get_contents('../ex01/private/passwd');
		$tmp_arr = unserialize($content_file);
		if($tmp_arr['login'] === $modif_login['login'] && 								    $tmp_arr['passwd'] === $modif_login['oldpw'])
		{
			$new_login = array();
			$new_login['login'] = $tmp_arr['login'];
			$new_login['passwd'] = hash("whirlpool", $_POST['newpw']);
			file_put_contents("../ex01/private/passwd", 											serialize($new_login));
			echo "OK\n";
		}
		else
		{
			echo "ERROR\n";
			exit;
		}
	}

?>
