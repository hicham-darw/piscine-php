<?php
	if($argc != 2)
		exit;
	$dest = $argv[1];
	$dest = trim($dest);
	$origin = null;
	
	while($pos = strpos($dest, " "))
	{
		if( !$origin)
		{
			$origin = substr($dest, 0, $pos);
			$origin = $origin . " ";
		}
		else
		{
			$origin = $origin . substr($dest, 0, $pos);
			$origin = $origin . " ";
		}
		$dest = substr($dest, $pos+1);
		$dest = trim($dest);
	}
	$origin = $origin . $dest;
	$argv[1] = $origin;

	echo $argv[1] . "\n";
?>
