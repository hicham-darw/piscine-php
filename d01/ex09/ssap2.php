#!/usr/bin/php
<?php
	if($argc == 1)
		exit;
	$i = 1;
	$arr_chr = array();
	$arr_num = array();
	$arr_oth = array();
	$index_num = 0;
	$index_chr = 0;
	$index_oth = 0;
	while($i < $argc)
	{
		if(preg_match_all('/\S+/', $argv[$i], $matches) > 1)
		{
			$j = 0;
			while($j < count($matches[0]))
			{
				$c = substr($matches[0][$j], 0, 1);
				if(is_numeric($c))
				{
					$arr_num[$index_num] = $matches[0][$j];
					$index_num++;
				}
				else if(ctype_alpha($c))
				{
					$arr_chr[$index_chr] = $matches[0][$j];
					$index_chr++;
				}
				else
				{
					$arr_oth[$index_oth] = $matches[0][$j]; 
					$index_oth++;
				}
				$j++;
			}
		}
		else
		{
			$c = substr($argv[$i], 0, 1);
			if(is_numeric($c))
			{
				$arr_num[$index_num] = $argv[$i];
				$index_num++;
			}
			else if(ctype_alpha($c))
			{
				$arr_chr[$index_chr] = $argv[$i];
				$index_chr++;
			}
			else
			{
				$arr_oth[$index_oth] = $argv[$i]; 
				$index_oth++;
			}
		}
		$i++;
	}
	sort($arr_chr);
	sort($arr_num);
	sort($arr_oth);
	$table = array_merge($arr_chr, $arr_num, $arr_oth);
	$i = 0;
	while($i < count($table))
	{
		echo $table[$i] . "\n";
		$i++;
	}
?>
