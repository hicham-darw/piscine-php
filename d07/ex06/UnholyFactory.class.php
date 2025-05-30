<?php

require_once "test1.php";
require_once	"Fighter.class.php";

class UnholyFactory {

	public function absorb($anstance){
		if(!method_exists($anstance, '__construct')){
			echo "(Factory can't absorb this, it's not a fighter)\n";
			return;
		}	
			
	}

	public function fabricate($requested_fighters){
		foreach(Fighter::$childs as $child){
			if($child === $requested_fighters){
				echo "(Factory fabricates a fighter of type {$requested_fighters})\n";
				if($child === "foot soldier"){
					$reflector = new ReflectionClass('Footsoldier');
					$obj = $reflector->newInstanceWithoutConstructor();
					return $obj;
				}else if($child === "archer"){
					$reflector = new ReflectionClass($child);
					$obj = $reflector->newInstanceWithoutConstructor();
					return $obj;
				}else if($child === "assassin"){
					$reflector = new ReflectionClass($child);
					$obj = $reflector->newInstanceWithoutConstructor();
					return $obj;
				}else
					return null;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type {$requested_fighters})\n";
		return null;
	}
}

?>
