<?php
	if($argc <= 2)
		exit;
	
	$i = 2;
	$val = null;
	while($i < $argc)
	{
		$tmp_key;
		if($pos = strpos($argv[$i], ":"))
		{
			$tmp_key = substr($argv[$i], 0, $pos);
			if($tmp_key == $argv[1])
				$val = substr($argv[$i], $pos+1) . "\n";
		}
		$i++;
	}
	echo $val;
?>
