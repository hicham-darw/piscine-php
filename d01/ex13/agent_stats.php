<?php
	if($argc != 2)
		exit;
	$stdin = fopen("php://stdin", "r") or die ("Unable to open file");
	if($argv[1] == "moyenne"){
		$result = 0;
		$counter = 1;
		while($line = fgets($stdin)){
			if($pos = strpos($line, ":")){
				$note = substr($line, $pos + 1);
				$note = trim($note);
				$result += $note;
				$counter++;	
			}
		}
		echo $result / $counter . "\n";
	}
	else if ($argv[1] == "moyenne_user"){
		while($line = fgets($stdin)){
			if($pos = strpos($line, ":")){
				$note = substr($line, $pos + 1);
				$note = trim($note);
				if(is_numeric($note))
					echo $line ;
			}
		}
	}
	else if ($argv[1] == "ecart_moulinette"){
		//here moyenne per user i know but need more data;
		while($line = fgets($stdin))
			echo $line;
	}
	fclose($stdin);
?>
