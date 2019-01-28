<?php 


class Triangle extends Shape {
	private $x1;
	private $y1;
	private $x2;
	private $y2;
	

	public function __construct($x ,$y , $x1 ,$y1,$x2, $y2, $fill, $opacity){
		parent::__construct($x, $y,$fill, $opacity);

		
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
	}


	public function getcenter(){

		return [

			'x1'=> $this->x1,
			'y1'=> $this->y1,
			'x2'=> $this->x2,
			'y2'=> $this->y2







		];
	}
}



























?>