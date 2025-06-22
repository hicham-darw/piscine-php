<?php
	$txt = file_get_contents('list.csv');
	$list = array();
	if($txt)
		$list = explode("\n", $txt);
	array_push($list, (count($list) + 1) . "; " . $_REQUEST['q']);
	$txt = implode("\n", $list);
	file_put_contents("list.csv", $txt);	
	require('select.php');
?>
