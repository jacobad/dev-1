<?php


class ChargeModel {
	public function getOneOrder($orderId){
		$database = new Database();

		$order = $database->queryOne('SELECT * FROM `Order` WHERE Id=?', [ $orderId ]);

		return $order;
	}
}