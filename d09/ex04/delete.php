<?php
	$id = $_REQUEST['q'];
	if($txt = file_get_contents('list.csv')){
		$list = explode("\n", $txt);
		if(isset($list[$id - 1])){
			unset($list[$id - 1]);
			sort($list);
		}
		$newList = array();
		$index = 1;
		foreach($list as $p){
			$p = $index . substr($p, strpos($p, ";"));
			$index++;
			array_push($newList, $p);
		}
		$txt = implode("\n", $newList);
		file_put_contents("list.csv", $txt);
		require("select.php");
	}else
		echo "<h1>Nothing!</h1>";
?>
