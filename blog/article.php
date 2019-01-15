<?php 
session_start();

if(array_key_exists('id', $_GET) == false || ctype_digit($_GET['id']) == false) {
    header('Location: blog_home.php');
    exit();
}
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT Post.Id = ?, Title,Contents ,CreationDate,FirstName, LastName  FROM Post INNER JOIN Author ON Author.Id = Post.Author_Id '
); 	


$query->execute( [ $_GET['id'] ]);  // execute la requete


$articles = $query->fetch(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,
 var_dump($articles);


if(empty($_POST) == false){

	var_dump($_POST);
	$nickName = $_POST['nickName'];
	$com = $_POST['contents'];
	$postId = $_POST['postId'];
	


	$pdo->exec('SET NAMES UTF8');


	$query = $pdo->prepare(
		'INSERT INTO Comment (Pseudo,Contents,CreationDate,Post_Id) VALUE (?,?,NOW(),?)'
	); 	

	$query->execute( [ $nickName, $com, $postId ] );

}




$query = $pdo->prepare     // requetes sql
(
	'SELECT Pseudo,Contents,Post_Id FROM Comment where Post_Id = ? '

); 

$query->execute([ $_GET['id'] ]);  // execute la requete


$comment = $query->fetchAll(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,
 var_dump($comment);












$template = 'article';
include ('layout.phtml');
?>