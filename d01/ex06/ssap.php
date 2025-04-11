<?php
	include("../ex03/ft_split.php");

	$i = 1;
	$table = array();
	$tmp_arr = array();
	$index = 0;

	while($i < $argc)
	{
		if($pos = strpos($argv[$i], " "))
		{
			$tmp_arr = ft_split($argv[$i]);
			$j = 0;
			while($j < count($tmp_arr))
			{
				array_push($table, $tmp_arr[$j]);
				$j++;
			}
		}
		else
			array_push($table, $argv[$i]);
		$i += 1;
	}
	sort($table);
	$i = 0;
	while($i < count($table))
	{
		echo $table[$i] . "\n";
		$i++;
	}
?>
