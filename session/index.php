<?php 
session_start();

var_dump($_SESSION);

$user = [
			'email' => 'test@mail.fr',
            'psw' => 'azerty',
			'firstName' => 'Rob',
            'lastName' => 'Durant',
            'age' => 32
		];
        
if (!empty($_POST)) {
	var_dump($_POST);




}






















include 'header.phtml';
include 'index.phtml';
include 'footer.phtml';
?>