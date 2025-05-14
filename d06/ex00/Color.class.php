<?php

class Color {
	public static $verbose = false;
	public int $red;
	public int $green;
	public int $blue;

public function __construct($rgb){

	if(isset($rgb['rgb']) && $rgb['rgb'] < 16777216){
		$this->red   = intval($rgb['rgb'], 10) / 65536 ;
		$this->green = (intval($rgb['rgb'], 10) % 65536) / 256;
		$this->blue  = (intval($rgb['rgb'], 10) % 65536) % 256;
	}else if (isset($rgb['red'])   && $rgb['red']   > -1 && $rgb['red']   < 256 &&
		  isset($rgb['green']) && $rgb['green'] > -1 && $rgb['green'] < 256 &&  
	     	  isset($rgb['blue'])  && $rgb['blue']  > -1 && $rgb['blue']  < 256) {
		$this->red = intval($rgb['red'], 10);
		$this->green = intval($rgb['green'], 10);
		$this->blue = intval($rgb['blue'], 10);	
	}
	if(Color::$verbose){
		echo "Color( red: $this->red, green: $this->green, blue: " .
		                               	  	 "$this->blue ) constructed.\n";
	}
	return ;
}

public function __destruct(){
	if(Color::$verbose){
	  	echo "Color( red: $this->red, green: $this->green, blue: " .
							  "$this->blue ) destructed.\n";
	}
	return;
}

public function __toString(){
	return "Color( red: $this->red, green: $this->green, blue: $this->blue)";
}

public static function doc(){
	if(file_exists("Color.doc.txt")){
		$file = fopen("Color.doc.txt", "r");
		while( !feof($file) ){
			$line = fgets($file);
			echo $line;
		}
	}
	return;
}

public function add($colr){
	$new ;
	if($colr === null){
		$new = new Color(['red'  =>$this->red, 
				  'green'=>$this->green,
				  'blue' =>$this->blue  ]);
	}else{
		$new = new Color(['red'  =>($this->red   + $colr->red),
				  'green'=>($this->green + $colr->green),
				  'blue' =>($this->blue  + $colr->blue)  ]);
	}
	return $new;
}

public function sub($colr){
	$new;
	if($colr === null){
		$new = new Color( ['red'  =>$this->red, 
				   'green'=>$this->green,
				   'blue' =>$this->blue  ]);
	}else{
		$new = new Color(['red'  =>($this->red - $colr->red),
				  'green'=>($this->green - $colr->green),
				  'blue' =>($this->blue - $colr->blue)   ]);
	}
	return $new;
}

public function mult($colr){
	$new ;
	if($colr === null){
		$new = new Color(['red'  =>$this->red, 
				  'green'=>$this->green, 
				  'blue' =>$this->blue]  );
	}else if (is_numeric($colr)){
		$new = new Color(['red'  =>($this->red   * intval($colr)),
				  'green'=>($this->green * intval($colr)),
				  'blue' =>($this->blue  * intval($colr))  ]);	
	
	}else{
		$new = new Color(['red'  =>($this->red   * intval($colr->red)),
				  'green'=>($this->green * intval($colr->green)),
				  'blue' =>($this->blue  * intval($colr->blue)) ]);
	}
	return $new;
}	

}
?>
