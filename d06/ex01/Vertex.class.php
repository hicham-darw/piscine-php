<?php
	require_once("../ex00/Color.class.php");

class Vertex {

	public static bool $verbose = false;
	private float $__x;
	private float $__y;
	private float $__z;
	private float $__w = 1.0;
	public $color ;

public function __construct($arr){
	if(isset($arr['x']) && isset($arr['y']) && isset($arr['z'])){
		$this->__x = $arr['x'];
		$this->__y = $arr['y'];
		$this->__z = $arr['z'];
		$this->color = new Color([255, 255, 255]);
		if(Vertex::$verbose){
			echo "Vertex( x: " . number_format($this->__x, 2) . ", y: " . 				  number_format($this->__y, 2) . ", z: " . 						    number_format($this->__z, 2) . ", w: " . 
			number_format($this->__w, 2) . ", $this->color ) constructed\n";
		}
	}
	return;
}

public function __toString(){
	$str = "Vertex( x: " . number_format($this->__x, 2) . ", y: " . 				 number_format($this->__y,2) . ", z:" . number_format($this->__z, 2) . 			 	", w: ".number_format($this->__w, 2).", ";
	if(Vertex::$verbose){
		return $str . "$this->color )";
	}else
		return $str . ")";
}

public static function doc(){

	if(file_exists("Vertex.doc.txt"))
		$str = file_get_contents('Vertex.doc.txt');
	else
		return false;
	return $str;
}

public function __destruct(){

	if(Vertex::$verbose){
		echo "Vertex( x: " . number_format($this->__x, 2) . ", y: " . 				  number_format($this->__y, 2) . ", z: " . number_format($this->__z, 2) . 		    " w: " . number_format($this->__w, 2) . ", $this->color ) ) destructed\n";
	}
	return;
}

}

?>
