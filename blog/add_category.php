<?php
session_start();

if(empty($_POST)==false){

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'INSERT INTO Category (Name) VALUES (?)'
); 	


$query->execute([$_POST['nom_cat']]);  // execute la requete


}



































$template = 'add_category';
include ('layout.phtml');
 ?>