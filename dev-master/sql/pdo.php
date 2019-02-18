<?php	$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT customerName FROM customers WHERE country = "France"'
);  


$query->execute();  // execute la requete


$offices = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


var_dump($offices);
?>