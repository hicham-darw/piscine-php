<?php

	if($argc !== 4)
	{
		echo "Incorrect parameters\n";
		exit;
	}
	$x = trim($argv[1]);
	$y = trim($argv[3]);
	$op = trim($argv[2]);
	if($op == "*"){
		$z = $x * $y;
		echo $z . "\n";
	}
	else if($op == "/")
	{
		$z = $x / $y;
		echo $x / $y . "\n";
	}
	else if($op == "+")
	{
		$z = $x + $y;
		echo $z . "\n";
	}
	else if ($op == "-")
	{
		$z = $x - $y;
		echo $z . "\n";
	}
	else if ($op == "%")
	{
		$z = $x % $y;
		echo $z . "\n";
	}
	else
		echo "incorrect parametres\n";
?>
