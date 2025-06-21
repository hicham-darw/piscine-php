<?php

	$txt = file_get_contents("list.csv");
	$list = explode("\n", $txt);
	foreach($list as $p){
		echo '<p>' . str_replace(';', ' -', $p) . '</p>';
	}
?>
