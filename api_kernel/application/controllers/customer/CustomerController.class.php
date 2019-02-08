<?php

class CustomerController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */


        $database = new Database();

        $api_key = 'aze';
        $keyword = 'je';

        if (array_key_exists('id', $_GET) == true && array_key_exists('api_key', $_GET) == true && $_GET['api_key']==$api_key) {

            $sql = 'SELECT * FROM customers WHERE customerNumber = ?';


            $execute = [$_GET['id']];

            $customer = $database->query($sql, $execute);


            $http->sendJsonResponse($customer);
        } else if (array_key_exists('keyword', $_GET) == true && array_key_exists('api_key', $_GET) == true && $_GET['api_key']==$api_key){

            $sql = 'SELECT * FROM customers WHERE contactFirstName LIKE "%" ? "%"';

            $execute = [$_GET['keyword']];

            $customers = $database->query($sql, $execute);
            
           $http->sendJsonResponse($customers);

        }else{

            echo 'va te faire foutre';
        }





    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}