<?php
class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
       var_dump('la');
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
      
        $orderTotal = json_decode($_POST['orderTotal']);
 		$mealModel = new MealModel();
 		$payment = new PaymentModel();

       $orderId = $payment->orderId($_SESSION);

 		for($i= 0;$i < count($orderTotal);$i++){
	 		
	 		$id = $orderTotal[$i]->Id;
	         var_dump($id);
	        $meal  = $mealModel->getMealId($id);
	       
	       
	        
	        $orderTotal[$i]->safeSalePrice = $meal['SalePrice'];
	        
	        $payment->order($orderTotal[$i]);
	        
	        


        }

        $payment->orderUpdate();

        $http->redirectTo('/Creditcard?orderId='.$orderId); 


    }
}
