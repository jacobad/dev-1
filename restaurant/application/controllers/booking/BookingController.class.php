<?php

class BookingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	

     

       
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	 
        $book = new BookingModel();

        var_dump($_POST);

        $book->reserver($_POST);
    	

    }
}

?>