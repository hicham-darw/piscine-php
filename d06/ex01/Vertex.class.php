<?php

class Vertex {

	public static boolean $verbose = false;
	private float $__x;
	private float $__y;
	private float $__z;
	private float $__w = 1.0;
	public $color = new Color([255, 255, 255]);

public function __construct($arr, $colr){
	if(isset($arr['x']) && isset($arr['y']) && isset($arr['z']) && isset($colr)){
		$this->__x = $arr['x'];
		$this->__y = $arr['y'];
		$this->__z = $arr['z'];
		$this->color = $colr;
		if(Vertex::$verbose){
			echo "Vertex( x: $this->__x, y: $this->__y, z: $this->__z, " .
					"w: $this->__w, $this->color ) ) constructed\n";
		}
	}
	return;
}

public function __toString(){
	$str =  "Vertex( x: $this->__x, y: $this->__y, z: $this->__z, w: $this->__w, ";
	if(Color::$verbose)
		return $str . "$this->color )\n";
	else
		return $str . ")\n";
}

public static function doc(){

	if(file_exists("Vertex.doc.txt")){
		$str = file_get_contents('Vertex.doc.txt');
		return $str;
	}else{
		return false;
	}
}



	
	

}

?>
