<?php 


session_start();

if(empty($_POST)==false){

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'INSERT INTO Author(FirstName,LastName) VALUES (?,?)'
); 	


$query->execute( [$_POST['firstName_author'],$_POST['lastName_author']] );  // execute la requete


header('Location: admin.php');
    exit();




}



























?>