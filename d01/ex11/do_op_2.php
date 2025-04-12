<?php
	if($argc != 2)
	{
		echo "Incorrect parameters\n";
		exit;
	}
	$str = trim($argv[1]);
	
	$first;
	$second;
	$op;
	if($pos = strpos($str, " "))
	{
		$first = trim(substr($str, 0, $pos));
		$str = substr($str, $pos + 1);
		$str = trim($str);
		if( !is_numeric($first))
		{
			echo "Syntax Error\n";
			exit;
		}
	}
	else
	{
		if($pos = strpos($str, "*"))
		{
			$first = substr($str, 0, $pos);
			$str = substr($str, $pos + 1);
			$str = trim($str);
			$second = $str;
			if(is_numeric($second))
				echo  $first * $second . "\n";
			else
				echo "Syntax Error\n";
			exit;
		}
		else if($pos = strpos($str, "/"))
		{
			$first = substr($str, 0, $pos);
			$str = substr($str, pos + 1);
			$str = trim($str);
			$second = $str;
			if(is_numeric($second))
				echo  $first * $second . "\n";
			else
				echo "Syntax Error\n";
			exit;
		}
		else if($pos = strpos($str, "+"))
		{
			$first = substr($str, 0, $pos);
			$str = substr($str, $pos + 1);
			$str = trim($str);
			$second = $str;
			if(is_numeric($second))
				echo  $first + $second . "\n";
			else
				echo "Syntax Error\n";
			exit;
		}
		else if($pos = strpos($str, "-"))
		{
			$first = substr($str, 0, $pos);
			$str = substr($str, pos + 1);
			$str = trim($str);
			$second = $str;
			if(is_numeric($second))
				echo  $first - $second . "\n";
			else
				echo "Syntax Error\n";
			exit;
		}
 		else if($pos = strpos($str, "%"))
		{
			$first = substr($str, 0, $pos);
			$str = substr($str, pos + 1);
			$str = trim($str);
			$second = $str;
			if(is_numeric($second))
				echo  $first % $second . "\n";
			else
				echo "Syntax Error\n";
			exit;
		}
		else
		{
			echo "Syntax Error\n";
			exit;
		}

	}
	$op = substr($str, 0, 1);
	if($op == "*" || $op == "/" || $op == "+" || $op == "-" || $op == "%")
	{
		$str = substr($str, 1);
		$str = trim($str);
		$second = $str;
		if(is_numeric($second))
		{
			if($op == "*")
				echo $first * $second . "\n";
			else if($op == "/")
				echo $first / $second . "\n";
			else if($op == "+")
				echo $first + $second . "\n";
			else if($op == "-")
				echo $first - $second . "\n";
			else 
				echo $first % $second . "\n";
		}
	}
	else
		echo "Syntax Error\n";
?>
