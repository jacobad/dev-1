<?php 

class OrderModel{


	public function getMeal(){

		$database = new Database();
		$meal = $database->query('SELECT * FROM Meal');
		return $meal;
	
	}

	





















}




































?>