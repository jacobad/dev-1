<?php

include 'application/bdd_connection.php';



	$query = $pdo->prepare
	(
	    'SELECT
	        *
	     FROM author'
	);

	$query->execute();
	$authors = $query->fetchAll(PDO::FETCH_ASSOC);

	$query = $pdo->prepare
	(
	    'SELECT
	        *
	     FROM category'
	);

	$query->execute();
	$categories = $query->fetchAll(PDO::FETCH_ASSOC);


if (empty($_POST) == false) {

	//var_dump($_POST);

	$query = $pdo->prepare
	(
	    '
            INSERT INTO
                post
                (Title, Contents, Author_Id, Category_Id, CreationDate)
            VALUES
                (?, ?, ?, ?, NOW())
        '

	);

	$query->execute( [ htmlspecialchars($_POST['title']), htmlspecialchars($_POST['contents']), htmlspecialchars($_POST['author']), htmlspecialchars($_POST['category'])  ] );

	header('Location: index.php');
	exit();

}






$template = 'add_post';

include 'layout.phtml';  

?>