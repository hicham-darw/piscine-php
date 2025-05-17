<?php
	require_once("../ex01/Vertex.class.php");

class Vector {

	public static bool $verbose = false;
	private float $_x;
	private float $_y;
	private float $_z;
	private float $_w = 1.0;

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

	if( isset($arr['dest']) ){
		$dest = $arr['dest'];
		if( isset($arr['orig']) ){
			$orig = $arr['orig'];
		}else{
			$orig = new Vertex(['x'=>0.0, 'y'=>0.0, 'z'=>0.0, 'w'=>1.0]);
		}
		$this->_x = $dest->get_x() - $orig->get_x();
		$this->_y = $dest->get_y() - $orig->get_y();
		$this->_z = $dest->get_z() - $orig->get_z();
		$this->_w = $dest->get_w() - $orig->get_w();
	}

	if(Vector::$verbose){
		echo "Vector( x:" . number_format($this->get_x(), 2) . 
			   ", y:" . number_format($this->get_y(), 2) . 
			   ", z:" . number_format($this->get_z(), 2) . 
			   ", w:" . number_format($this->get_w(), 2) . " ) constructed\n";
	}
	return ;
}

public function __destruct(){

	if(Vector::$verbose){
		echo "Vector( x:" . number_format($this->get_x(), 2) . 
			   ", y:" . number_format($this->get_y(), 2) .
			   ", z:" . number_format($this->get_z(), 2) . 
			   ", w:" . number_format($this->get_w(), 2) . " ) destructed\n"; 
	}
	return;
}
 
public function __toString(){
	return "Vector( x:" . number_format($this->get_x(), 2) . 
		     ", y:" . number_format($this->get_y(), 2) .
		     ", z:" . number_format($this->get_z(), 2) .
		     ", w:" . number_format($this->get_z(), 2) . " )";
}

public function magnitude(){
	return sqrt(($this->get_x() ** 2)+($this->get_y() ** 2)+($this->get_z() ** 2));
}

public function normalize(){
	$mag = $this->magnitude();
	$new;
	if($this->magnitude() != 0.0){
		$new = new Vector(['dest'=>new Vertex(['x'=>($this->get_x() / $mag),
						       'y'=>($this->get_y() / $mag),
						       'z'=>($this->get_z() / $mag) ])]);
		return $new;
	}
	return;
}

public function add($vec){

	$new = new Vector(['dest'=> new Vertex(['x'=>($this->get_x() + $vec->get_x()),
						'y'=>($this->get_y() + $vec->get_y()), 
						'z'=>($this->get_y() + $vec->get_z())])]);
	return $new;
}

public function sub($vec){

	$new = new Vector(['dest'=>new Vertex([	'x'=>($this->get_x() - $vec->get_x()),
						'y'=>($this->get_y() - $vec->get_y()),
						'z'=>($this->get_z() - $vec->get_z())])]);
	return $new;
}

public function opposite(){
	$new = new Vector(['dest'=>new Vertex([	'x'=>($this->get_x() * (-1)),
						'y'=>($this->get_y() * (-1)), 
						'z'=>($this->get_z() * (-1))])]);
	return $new;
}
public static function doc(){
	
	if(file_exists("Vector.doc.txt")){
		return file_get_contents("Vector.doc.txt");
	}
	return false;
} 


}

?>
