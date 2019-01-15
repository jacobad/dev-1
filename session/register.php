<?php 

if(empty($_POST) == false) {
	
    var_dump($_POST);
    
    $pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');
    
    	$query = $pdo->prepare
	(
	    'INSERT INTO users(mail, psw, firstName, lastName, age) VALUES (?, ?, ?, ?, ?)'
	);

	$query->execute( [ $_POST['email'], $_POST['psw'], $_POST['firstName'], $_POST['lastName'], $_POST['age'] ] );

}
























include 'header.phtml';
include 'resgister.phtml';
include 'footer.phtml';
?>