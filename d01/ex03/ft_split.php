<?php

function ft_split($str){
	$i = 0;
	$index = 0;
	$new = 0;
	$dest = trim($str);
	$myArray = array();
	while(	$new = strpos($dest, " ") )
	{
		$myArray[$index] = substr($dest, $i, $new);
		$index += 1;
		$dest = substr($dest, $new + 1);
		$dest = trim($dest);
	}
	trim($dest);
	$myArray[$index] = substr($dest, 0, strlen($dest)); 
	sort($myArray);	
	return $myArray;
}
?>

