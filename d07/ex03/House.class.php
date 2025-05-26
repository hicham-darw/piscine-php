<?php

abstract class House {

	abstract function getHouseName();
	abstract function getHouseMotto();	
	abstract function getHouseSeat();

	public function introduce(){
			echo "House " . $this->getHouseName() . " of ";
			echo $this->getHouseSeat() . " : ";
			echo "\"" . $this->getHouseMotto() . "\"\n";
	}
}
?>
