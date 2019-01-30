<?php

class MealModel {

	public function meal(){

		$database = new Database();
		$meal = $database->query('SELECT * FROM Meal');
		return $meal;
	}

	public function getMealId($id){
		
		$database = new Database(); 
		$meal = $database->queryOne('SELECT * FROM Meal WHERE Id =?',[$id]);
		return $meal;
	}





}



?>