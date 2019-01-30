<?php 


class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	

     

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    	
    	$login = new LoginModel();
    	 $login->connectUser($_POST);



    	var_dump($_SESSION);
    	$http->redirectTo('/');





    	

    }
}





























?>