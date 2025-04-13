<?php
	if($argc == 1)
		exit;
	$str = trim($argv[1]);
	$pattern = "/\s+/";
	$str = preg_replace($pattern, " ", $str);
	echo $str ;
?>	
