#!/usr/bin/php
<?php
	if($argc != 2)
		exit();
	$error_msg = "Wrong format\n";
	preg_match_all('/\S+/', $argv[1], $matches);
	if(count($matches[0]) != 5)
	{
		echo "Wrong format". PHP_EOL;
		exit();
	}
	if(!preg_match('/^[Ll]undi$/', $matches[0][0]) && 
	   !preg_match('/^[Mm]ardi$/', $matches[0][0]) && 
	   !preg_match('/^[Mm]ercredi$/', $matches[0][0]) && 
	   !preg_match('/^[Jj]eudi$/', $matches[0][0]) && 
	   !preg_match('/^[Vv]endredi$/', $matches[0][0]) && 
	   !preg_match('/^[Ss]amedi$/', $matches[0][0]) && 
           !preg_match('/^[Dd]imanche$/', $matches[0][0]))
	{
		echo $error_msg;
		exit();
	}
	if(!is_numeric($matches[0][1]) || strlen($matches[0][1]) > 2)
	{
		echo $error_msg;
		exit();
	}
	if(	!preg_match('/^[Jj]anvier$/', $matches[0][2]) &&
		!preg_match('/^[Ff]evrier$/', $matches[0][2]) &&
		!preg_match('/^[Mm]ars$/', $matches[0][2]) &&
		!preg_match('/^[Mm]ai$/', $matches[0][2]) &&
		!preg_match('/^[Aa]vril$/', $matches[0][2]) &&
		!preg_match('/^[Jj]uin$/', $matches[0][2]) &&
		!preg_match('/^[Jj]uillet$/', $matches[0][2]) &&
		!preg_match('/[Aa]out$/', $matches[0][2]) &&
		!preg_match('/^[Ss]eptembre$/', $matches[0][2]) &&
		!preg_match('/^[Oo]ctobre$/', $matches[0][2]) &&
		!preg_match('/^[Nn]ovembre$/', $matches[0][2]) &&
		!preg_match('/^[Dd]ecembre$/', $matches[0][2]))
	{
		echo $error_msg;
		exit();
	}
	if(!is_numeric($matches[0][3]) || strlen($matches[0][3]) != 4)
	{
		echo $error_msg;
		exit();
	}
	if(preg_match_all('/:/', $matches[0][4]) != 2)
	{
		echo $error_msg;
		exit();
	}
	else
	{
		preg_match_all('/[0-9]+/', $matches[0][4], $time);
		$i = 0;
		while($i < count($time[0]))
		{
			if(!is_numeric($time[0][$i]))
			{
				echo $error_msg;
				exit;
			}	
			$i++;
		}
	}
	$fr_to_en = [
		"janvier" => "january",
		"fevrier" => "february",
		"mars" => "march",
		"mai" => "may",
		"juin" => "june",
		"juillet" => "july",
		"aout" => "august",
		"septembre" => "september",
		"octobre" => "october",
		"novembre" => "november",
		"decembre" => "december",
		"lundi" => "monday",
		"mardi" => "tuesday",
		"mercredi" => "wednesday",
		"jeudi" => "thursday",
		"vendredi" => "friday",
		"samedi" => "saturday",
		"dimanche" => "sunday"
	];
	$month_fr = strtolower($matches[0][2]);
	$month_en = $fr_to_en[$month_fr];
	$day_fr = strtolower($matches[0][0]);
	$day_en = $fr_to_en[$day_fr];
	$str_time = $day_en . " " . $matches[0][1] . " " . $month_en . " " . $matches[0][3] . " " . $matches[0][4];
	//3600 sec for default use -UTC-. that is correct output;
	echo (strtotime($str_time) - 3600) . "\n";
?>
