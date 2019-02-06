<?php 



class PaymentModel{

	private $order;
	private $totalAmount;

	public function __construct() {
		$this->order = "";
		$this->totalAmount = 0;
	}


	public function order($user,$value){
		
		$database = new Database();
		$this->order = $database->executeSql('INSERT INTO `Order` (User_Id, CreationTimestamp)VALUES (?,NOW())',[$user['Id']]);



	

		$database->executeSql ('INSERT INTO  OrderLine (QuantityOrdered,Meal_Id,PriceEach,Order_Id) VALUES (?,?,?,?)',
			[$value->quantity,$value->Id,$value->safeSalePrice, $this->order]);


		$this->totalAmount += $value->quantity * $value->safeSalePrice;



	
		$database->executeSql('UPDATE `Order` SET TotalAmount = ? ,	TaxeRate = ? ,TaxeAmount=? ,CompleteTimestamp = NOW()',[$this->totalAmount,0.20,$this->totalAmount * 0.20]);
	}


}







?>