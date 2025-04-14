<?php
	if($argc < 2)
		exit;
	$filename = fopen($argv[1], "r") or die ("Unable open file!");
	$content = null;
	while(!feof($filename))
	{
		$line =  fgets($filename);
		$str = null;
		if(preg_match('/title=(.*?)<\/a>/', $line, $matches))
		{
			$pos = strpos($line, "title=");
			$str = substr($line, 0, $pos+6);
			$str = $str . strtoupper($matches[1]);
			$pos = strpos($line, "a>");
			$str = $str . substr($line, $pos - 2, strlen($line) - ($pos-2));
		}
		else
			$str = $line;
		if(preg_match('/.com>(.*?)<img/', $str, $matches))
		{
			$pos = strpos($str, ".com>");
			$new = substr($str, 0, $pos+5);
			$new = $new . strtoupper($matches[1]);
			$pos = strpos($str, "<img");
			$new = $new . substr($str, $pos, strlen($str) - $pos); 
			$content = $content . $new;
		}
		else
			$content = $content . $str;
	}
	fclose($filename);
	echo $content ;
	
?>


