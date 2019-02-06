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
 		for($i= 0;$i < count($orderTotal);$i++){
	 		
	 		$id = $orderTotal[$i]->Id;
	        
	        $meal  = $mealModel->getMealId($id);
	       
	       
	        
	        $orderTotal[$i]->safeSalePrice = $meal['SalePrice'];
	        
	        $payment->order($_SESSION,$orderTotal[$i]);
	        
	        


        }

        var_dump($meal);
    	var_dump($orderTotal);
    	
                require_once('vendor/autoload.php');


        \Stripe\Stripe::setApiKey('sk_test_heSlcalLUopHPKF5j3hGJ8Td');


        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $token = $_POST['stripeToken'];



        // create customer 

        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token
        ));

        //payment

        $charge = \Stripe\Charge::create(array(
            "amount" => 3000,
            "currency" => "eur",
            "description"=>"Commande ok",
            "customer" => $customer->id
        ));

        //header('Location: succes.php?tid='.$charge->id.'&product='.$charge->decription);
       // exit();

     

       
    	



    }
}
