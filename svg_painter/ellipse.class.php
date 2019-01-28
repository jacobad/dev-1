<?php 


class Ellipse extends Circle{

	private $ry;


	public function __construct($x, $y,$r,$ry,$fill, $opacity){

		parent::__construct($x, $y,$r,$fill, $opacity);

		$this->ry = $ry;
	}


	public function getCenter(){
		return $this->ry;
	}





}



























?>