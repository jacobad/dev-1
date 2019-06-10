<?php

include 'application/bdd_connection.php';

//var_dump($_POST);

$query = $pdo->prepare(
	' INSERT INTO
            comment
            (Pseudo, Contents, Post_Id, CreationDate)
        VALUES
            (?, ?, ?, NOW())'
	);

$query->execute( [ htmlspecialchars($_POST['nickName']), htmlspecialchars($_POST['contents']), htmlspecialchars($_POST['postId']) ] );

header('Location: show_post.php?id='.htmlspecialchars($_POST['postId']));
exit();
?>
