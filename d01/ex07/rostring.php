<?php
	$i = 1;
	while($i < $argc)
	{
		if($sp = strpos($argv[$i] , " "))
		{
			$first_word = substr($argv[$i], 0, $sp);
			$str = substr($argv[$i], $sp + 1) . " ";
			$str = $str . $first_word;
			$argv[$i] = $str;
			echo $argv[$i] . "\n";
			break;
		}
		$i++;
	}
	if($i === $argc)
		echo $argv[1] . "\n";

?>
