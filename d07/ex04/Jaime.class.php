<?php

include ('Tyrion.class.php');

class Jaime{
	
public function sleepWith($anstance){
	if(method_exists($anstance, 'response_1'))
		$anstance->response_1();
	else
		echo "Let's do this.\n";
}

public function response_1(){
	echo "Not even if I'm drunk !\n";
	return;
}

public function response_2(){
	echo "Not even if I'm drunk !\n";
	return;
}

}
?>
