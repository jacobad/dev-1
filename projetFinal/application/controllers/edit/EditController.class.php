<?php

class EditController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */var_dump($_SESSION);
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */

           $edit = new EditpageModel();
           $element = new ElementsModel();

            $edit->addPhotoProduct($_FILES,$_SESSION,$_POST);
            // $element->addText($_POST,$_SESSION);
            $http->redirectTo('/editpage');
           // $prod = $edit->recupPhoto($_SESSION);
          //  $http->sendJsonResponse($prod);


    }
}



?>