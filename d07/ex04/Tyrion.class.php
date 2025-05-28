<?php

class Tyrion{

	public function sleepWith($anstance){
		if(method_exists($anstance, 'response_2'))
			$anstance->response_2();
		else
			echo "Let's do this.\n";
	}

	public function response_1(){
		echo "Not even if I'm drunk !\n";
		return;
	}
	
}
?>
