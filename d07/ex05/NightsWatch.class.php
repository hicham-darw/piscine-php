<?php

require_once "IFighter.class.php";

class NightsWatch implements IFighter {

	public function recruit($anstance){
		if(method_exists($anstance, 'fight')){
			$anstance->fight();
		}			
		return;
	}

	public function fight(){
		return;
	}
}

?>
