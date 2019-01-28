<?php 

class Carre extends Shape {

	private $width;

	  public function __construct($x, $y,$width, $fill, $opacity){
			parent::__construct($x, $y, $fill, $opacity);

			$this->width =$width;


	  }

	  public function getSize() {

		return [
			'width' => $this->width,
			'height' => $this->width
		];
	}









}










































?>