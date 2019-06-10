<?php

if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])) {
    header('Location: index.php');
    exit();
}

include 'application/bdd_connection.php';


$query = $pdo->prepare(
	' SELECT
            post.Id,
            Title,
            Contents,
            CreationDate,
            FirstName,
            LastName
        FROM
            post
        INNER JOIN
            author
        ON
            post.Author_Id = author.Id
        WHERE
            Post.Id = ?'
	);

$query->execute( [ $_GET['id'] ] );
$post = $query->fetch(PDO::FETCH_ASSOC);

	//var_dump($post);

$query = $pdo->prepare(
	'SELECT
            Pseudo,
            Contents,
            CreationDate
        FROM
            comment
        WHERE
            Post_Id = ?'
	);

$query->execute( [ $_GET['id'] ] );
$comments = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($comments);

$template = 'show_post';

include 'layout.phtml';


?>