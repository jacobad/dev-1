<?php 
session_start();

include 'dataBase_class.php';



if(empty($_POST)==false){

	$data = new Database();
	

	$user =$data->queryOne('SELECT * FROM users WHERE mail= ?',[$_POST['email']]);

	var_dump($user);

		if( $user['mail'] == $_POST['email'] &&  crypt($_POST['psw'],$user['psw'] )== $user['psw']) {
    
    	var_dump('connecté');
        
        $_SESSION['email'] = $user['mail'];
        $_SESSION['psw'] = $user['psw'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['age'] = $user['age'];
        
        var_dump($_SESSION);

    
    }

}














$template = 'login';
include 'layout.phtml';

?>