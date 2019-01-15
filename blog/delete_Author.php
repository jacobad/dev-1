<?php 

session_start();

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');




	$query = $pdo->prepare(
		'DELETE FROM Author WHERE Id= ?'
	); 	

	$query->execute( [ $_GET['id']] );


	header('Location: admin.php');
    exit();































?>