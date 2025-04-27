<?php
	header("content-type: image/png");

	$path = "img/42.png";
	if(file_exists($path))
		echo @readfile($path);
	else
		exit();
?>
