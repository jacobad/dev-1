<?php 

class BoutiqueController
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

        if (array_key_exists('id', $_GET) == false) {

            $sql = 'SELECT * FROM products';


            $execute = [];

            $products = $database->query($sql, $execute);


            // $http->sendJsonResponse($products);


        } else if (array_key_exists('id', $_GET) == true) {

            $sql = 'SELECT * FROM products WHERE user_Id=?';

            $execute = [$_GET['id']];

            $products = $database->queryOne($sql, $execute);
            
            $http->sendJsonResponse($products);
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

        var_dump($_POST);
        var_dump($_FILES);

        $photoProduct = new UsersphotoModel();

        $photoProduct->addPhotoProduct($_FILES , $_SESSION);
       
    }





}








?>