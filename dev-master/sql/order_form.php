<?php

$orderNumber = $_GET['orderNumber'];
var_dump($orderNumber);


$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT customerName,contactLastName,contactFirstName, addressLine1,city ,customers.customerNumber FROM customers INNER JOIN orders ON orders.customerNumber = customers.customerNumber WHERE orderNumber=?'
); 	


$query->execute( [ $_GET['orderNumber'] ] );  // execute la requete


$info_customer = $query->fetch(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


$query = $pdo->prepare     // requetes sql
(
	'SELECT priceEach,quantityOrdered,productName , (priceEach * quantityOrdered) AS total FROM orderdetails INNER JOIN products ON products.productCode = orderdetails.productCode WHERE orderNumber=?'
); 	


$query->execute( [ $_GET['orderNumber'] ] );  // execute la requete


$info_product = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


$query = $pdo->prepare     // requetes sql
(
	'SELECT SUM(priceEach * quantityOrdered) AS total FROM orderdetails WHERE orderNumber=? GROUP BY orderNumber=?'
); 	


$query->execute( [ $_GET['orderNumber'],$_GET['orderNumber'] ] );  // execute la requete


$prix = $query->fetch(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,



var_dump($prix);
include 'order_form.phtml';



?>