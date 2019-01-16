<?php 
session_start();

include ('application_hash.php');

if(empty($_POST)==false){
	var_dump($_POST);

	$hashPassword = hashPassword($_POST['password']);

	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');
    
    	$query = $pdo->prepare
	(
	    'INSERT INTO users(mail, psw, firstName, lastName, pseudo,role) VALUES (?, ?, ?, ?, ?,"user")'
	);

	$query->execute( [ $_POST['mail'],$hashPassword,$_POST['firstName'], $_POST['lastName'], $_POST['pseudo'] ] );
	
	$_SESSION['firstName'] = $_POST['firstName'];
	$_SESSION['lastName'] = $_POST['lastName'];
	$_SESSION['mail'] = $_POST['mail'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['pseudo'] = $_POST['pseudo'];

}



$template = 'register';
include ('layout.phtml');
?>