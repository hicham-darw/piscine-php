<?php
function ft_is_sort($array) : bool{

	$i = 0;
	$tmp_arr = array();
	while($i < count($array))
	{
		array_push($tmp_arr, $array[$i]);
		$i += 1;
	}
	sort($tmp_arr);
	echo "-------| tmp_arr |-----------\n";
	print_r($tmp_arr);
	echo "-------| array |-----------\n";
	print_r($array);
	
	$i = 0;
	while($i < count($array))
	{
		if($tmp_arr[$i] === $array[$i])
			$i += 1;
		else
			break;
	}
	if($i === count($array))
		return true;
	else
		return false;
}

?>
