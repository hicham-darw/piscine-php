<?php
	$txt = file_get_contents('list.csv');
	$list = explode("\n", substr($txt,0, strlen($txt) - 1));
	array_push($list, (count($list)) . "; " . $_REQUEST['q']);
	$txt = implode("\n", $list);
	file_put_contents("list.csv", $txt);
	require('select.php');
?>
