<?php

class Fighter {

	public static $childs = array();

	//in function if method exists fight is a fighter otherwise is not a fighter
	public function __construct($var){
		if(method_exists($this, 'fight')){
			foreach(self::$childs as $child ){
				if($child === $var)
				{
					echo "(Factory already absorbed a fighter of type {$var})\n";
					return;
				}
			}
			echo "(Factory absorbed a fighter of type {$var})\n";
			array_push(self::$childs, $var);
		}else{
			echo "(Factory can't absorb this, it's not a fighter)\n";
		}
	}
}
?>
