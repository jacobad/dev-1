<?php

include 'application/bdd_connection.php';


$query = $pdo->prepare(
	'SELECT
            post.Id,
            Title,
            Contents,
            CreationDate,
            FirstName,
            LastName,
            category.Name AS category_Name
        FROM
            post
        INNER JOIN
            author
        ON
            post.Author_Id = author.Id
        INNER JOIN
            Category
        ON
            Post.Category_Id = Category.Id
        ORDER BY
            CreationDate DESC'
	);

	$query->execute();
	$posts = $query->fetchAll(PDO::FETCH_ASSOC);


$template = 'admin';
include 'layout.phtml';


?>