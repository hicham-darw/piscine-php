<?php

class House {
	
	public function introduce(){
		if(method_exists($this, 'getHouseName') && 
		     method_exists($this, 'getHouseSeat') &&
		 	method_exists($this, 'getHouseMotto')){
			$house_name = $this->getHouseName();
			$house_seat = $this->getHouseSeat();
			$house_motto = $this->getHouseMotto();
		      echo"House {$house_name} of {$house_seat} : \"{$house_motto}\"\n"; 
		}
	}
}
?>
