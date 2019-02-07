<?php 

class OrderModel{


	public function getMeal(){

		$database = new Database();
		$meal = $database->query('SELECT * FROM Meal');
		return $meal;
	
	}
	public function orderId($id){

		$database = new Database();
		$meal = $database->query('SELECT * FROM order WHERE Id= ?',[$id]);
		return $meal;
	
	}


	





















}




































?>