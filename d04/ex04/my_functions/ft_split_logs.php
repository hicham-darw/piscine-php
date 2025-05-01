<?php
function ft_split_logs($content){

	if(!$content)
		return false;
	$index = 0;
	$arr = array();
	while($pos = strpos($content, ";}"))
	{
		$arr[$index] = substr($content, 0, $pos+2);
		$index++;
		$content = substr($content, $pos+2);
	}
	return $arr;
}

?>
