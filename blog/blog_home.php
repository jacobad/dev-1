<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT Post.Id, Title,Contents ,CreationDate,FirstName, LastName  FROM Post INNER JOIN Author ON Author.Id = Post.Author_Id '
); 	


$query->execute();  // execute la requete


$post = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,
 var_dump($post);







$template = 'blog_home';
include ('layout.phtml');
?>