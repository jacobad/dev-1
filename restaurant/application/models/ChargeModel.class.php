<?php


class ChargeModel {
	public function getOneOrder($orderId){
		$database = new Database();

		$order = $database->queryOne('SELECT * FROM `Order` WHERE Id=?', [ $orderId ]);

		return $order;
	}
	public function updateStatus($orderId) {
        $database = new Database();

        // Insertion de la commande dans la base de donées.
        $order = $database->queryOne
        (
            'UPDATE `Order` SET Status = "payed" WHERE Id =?',
            [ $orderId ]
        );
        
    }
    
}