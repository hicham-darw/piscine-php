<?php
	require_once("../ex00/Color.class.php");

class Vertex {

	public static bool $verbose = false;
	private float $_x;
	private float $_y;
	private float $_z;
	private float $_w = 1.0;
	public $color ;

public function get_x(){
	return $this->_x;
}
public function get_y(){
	return $this->_y;
}
public function get_z(){
	return $this->_z;
}
public function get_w(){
	return $this->_w;
}

public function __construct($arr){
	if(isset($arr['x']) && isset($arr['y']) && isset($arr['z'])){
		$this->_x = $arr['x'];
		$this->_y = $arr['y'];
		$this->_z = $arr['z'];
		$this->color = new Color([255, 255, 255]);
		if(Vertex::$verbose){
			echo "Vertex( x: " . number_format($this->_x, 2) . ", y: " . 				  number_format($this->_y, 2) . ", z: " . 						    number_format($this->_z, 2) . ", w: " . 
			number_format($this->_w, 2) . ", $this->color ) constructed\n";
		}
	}
	return;
}

public function __toString(){
	$str = "Vertex( x: " . number_format($this->_x, 2) . ", y: " . 				 number_format($this->_y, 2) . ", z:" . number_format($this->_z, 2) . 			 	", w: ".number_format($this->_w, 2).", ";
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
		echo "Vertex( x: " . number_format($this->_x, 2) . ", y: " . 				  number_format($this->_y, 2) . ", z: " . number_format($this->_z, 2) . 		    " w: " . number_format($this->_w, 2) . ", $this->color ) ) destructed\n";
	}
	return;
}

}

?>
