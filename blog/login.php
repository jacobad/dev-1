<?php 
session_start();

include 'application_hash.php';
if (!empty($_POST)) {
	var_dump($_POST);

	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa');

	

	$pdo->exec('SET NAMES UTF8');
    
    	$query = $pdo->prepare
	(
	    'SELECT * FROM users WHERE mail= ?'
	);

	$query->execute( [ $_POST['mail'] ] );
    
    $user = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($user);
	if( verifyPassword($_POST['password'], $user['psw'] )== true ) {
    
    	var_dump('connecté');
    	$_SESSION['firstName'] = $user['firstName'];
		$_SESSION['lastName'] = $user['lastName'];
		$_SESSION['mail'] = $user['mail'];
		$_SESSION['password'] = $user['psw'];
		$_SESSION['pseudo'] = $user['pseudo'];
		$_SESSION['role'] = $user['role'];

		var_dump($_SESSION);
		header('Location: blog_home.php');
		exit();
    
        
	}else if ($user == false) {
    	
        $error = true;
		$message = "Votre adresse mail n'existe pas...";
	}else{
		$error = true;
		$message = "Votre mot de passe est incorrect...";
	}
    

}










$template = 'login';
include ('layout.phtml');
?>