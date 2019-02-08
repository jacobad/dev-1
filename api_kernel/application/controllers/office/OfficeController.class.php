<?php

class OfficeController
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



        if (empty($_GET)== true ) {

            $sql = 'SELECT * FROM offices';


            $execute = [];

            $office = $database->query($sql, $execute);

            $http->sendJsonResponse($office);


        } else if (array_key_exists('id', $_GET) == true) {

            $sql = 'SELECT * FROM offices WHERE officeCode=?';

            $execute = [$_GET['id']];

            $office = $database->queryOne($sql, $execute);
            
            $http->sendJsonResponse($office);

        }else if (array_key_exists('country', $_GET) == true) {

            $sql = 'SELECT * FROM offices WHERE country=?';

            $execute = [$_GET['country']];

            $office = $database->query($sql, $execute);
            
            $http->sendJsonResponse($office);

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