<?php 

class EditpageController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */    

            //charger tous les articles en fonction user

        $edit = new EditpageModel();
        $element = new ElementsModel();
        $prod = $edit->recupPhoto($_SESSION);
       
        $text = $element->recupText($_SESSION);

        var_dump($prod);

        return [
            'prod' => $prod,
            'text' => $text
        ];

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








?>