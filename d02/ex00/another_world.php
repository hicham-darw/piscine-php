<?php
	if($argc == 1)
		exit;
	$str = trim($argv[1]);
	$new = null;
	while($pos = strpos($str, " "))
	{	
		if($new == null)
		{
			$tmp = substr($str, 0, $pos);
			$new = substr($str, 0, $pos);
		}
		else
		{
			$tmp = substr($str, 0, $pos);
			$new = $new . substr($str, 0, $pos);
		}
		$new = $new . " ";
		$str = substr($str, $pos + 1);
		$str = trim($str);
	}
	
	$new = trim($new . $str);
	echo $new . "\n";
?>	
