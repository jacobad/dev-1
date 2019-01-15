<?php 
session_start();
                                                                      
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT *  FROM Author'
); 	


$query->execute();  // execute la requete


$Authors = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


var_dump($Authors);



$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT *  FROM Category'
); 	


$query->execute();  // execute la requete


$Category = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


var_dump($Category);



if(empty($_POST)== false){
	var_dump($_POST['title']);
	$titre = $_POST['title'];
	$contents = $_POST['contents'];
	$author = $_POST['author'];
	$cat = $_POST['category'];
	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


	$pdo->exec('SET NAMES UTF8');



	$query = $pdo->prepare(
		'INSERT INTO Post (Title,Contents,CreationDate,Author_Id,Category_Id) VALUE (?,?,NOW(),?,?)'
	); 	

	$query->execute( [ $titre,$contents,$author,$cat ] );


	


}





$template = 'add_Post';
include ('layout.phtml');
?>