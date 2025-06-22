<?php

	$txt = file_get_contents("list.csv");
	if(!$txt){
		echo "<h1>Nothing!</h1>";
		exit();
	}
	$list = explode("\n", $txt);
	echo "<ul>";
	foreach($list as $p){
		echo '<li>' . str_replace("; ", " / ", $p) . '</li>';
	}
	echo "</ul>";
?>
