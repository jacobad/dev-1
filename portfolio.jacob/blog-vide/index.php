<?php

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
        Post.Author_Id = author.Id
    ORDER BY
        CreationDate DESC'
	);

	$query->execute();
	$posts = $query->fetchAll(PDO::FETCH_ASSOC);


$template = 'index';
include 'layout.phtml';



?>