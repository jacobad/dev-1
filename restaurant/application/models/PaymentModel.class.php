<?php 



class PaymentModel{

	private $order;
	private $totalAmount;

	public function __construct() {
		$this->order = "";
		$this->totalAmount = 0;
	}


	public function orderId($user){
		
		$database = new Database();
		$this->order = $database->executeSql('INSERT INTO `Order` (User_Id, CreationTimestamp)VALUES (?,NOW())',[$user['Id']]);
		return $this->order;

}
	
	public function order($value){
		$database = new Database();

		$database->executeSql ('INSERT INTO  OrderLine (QuantityOrdered,Meal_Id,PriceEach,Order_Id) VALUES (?,?,?,?)',
			[$value->quantity,$value->Id,$value->safeSalePrice, $this->order]);


		$this->totalAmount += $value->quantity * $value->safeSalePrice;

}

	public function orderUpdate(){
		$database = new Database();
	
		$database->executeSql('UPDATE `Order` SET TotalAmount = ? ,	TaxeRate = ? ,TaxeAmount=? ,CompleteTimestamp = NOW()',[$this->totalAmount,0.20,$this->totalAmount * 0.20]);

		return $this->order;
	}


}







?>