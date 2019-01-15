<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');






if(empty($_POST)== false){
	$titleUpdate = $_POST['title'];
	$contentUpdate = $_POST['contents'];

	$pdo->exec('SET NAMES UTF8');



	$query = $pdo->prepare(
		'UPDATE `Post` SET `Title`=?,`Contents`=? WHERE Id= ?'
	); 	

	$query->execute( [ $titleUpdate,$contentUpdate, $_POST['postId']] );
	header('Location: admin.php');
    exit();




} else {

if(array_key_exists('id', $_GET) == false || ctype_digit($_GET['id']) == false) {
    header('Location: admin.php');
    exit();
}
	
$query = $pdo->prepare     // requetes sql
(
	'SELECT Id, Title,Contents FROM Post WHERE Id= ?
	'
); 	


$query->execute( [$_GET['id']] );  // execute la requete


$post = $query->fetch(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,
 var_dump($post);
 $template = 'edit_post';
include ('layout.phtml');
}











?>