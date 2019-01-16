<?php 
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT Post.Id, Title,Contents ,CreationDate,FirstName, LastName ,Category.Name ,Category.Id AS numero FROM Post INNER JOIN Category ON Category.Id = Post.Category_Id INNER JOIN Author ON Author.Id = Post.Author_Id 
	'
); 	


$query->execute();  // execute la requete


$post = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,
 var_dump($post);

$query = $pdo->prepare     // requetes sql
(
	'SELECT * FROM Category 
	'
); 	


$query->execute();  // execute la requete


$category = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


 if(empty($_POST)==false){

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'INSERT INTO Category (FirstName,LastName) VALUES (?,?)'
); 	


$query->execute( [$_POST['firstName_author'],$_POST['lastName_author']] );  // execute la requete


$query = $pdo->prepare     // requetes sql
(
	'SELECT * FROM users
	'
); 	


$query->execute();  // execute la requete


$users= $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,

}


$template = 'admin';
include ('layout.phtml');
?>