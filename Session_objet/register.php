<?php 
session_start();
include 'dataBase_class.php';
include 'user_class.php';

if(empty($_POST)== false){
	var_dump($_POST);

	$user = new User(null, null, null, null, null);

	 $user->setEmail($_POST['email']);
	 $email =$user->getEmail();

	 $psw = $user->hashPassword($_POST['password']);


	 $user->setFirstName($_POST['firstName']);
	 $firstName = $user->getFirstName();

	$user->setLastName($_POST['lastName']);
	$lastName = $user->getLastName();

	 $user->setAge($_POST['age']);
	 $age = $user->getAge();




	$data = new Database();

	$data->queryAll('INSERT INTO users(mail, psw, firstName, lastName, age) VALUES (?, ?, ?, ?, ?)',[$email, $psw, $firstName, $lastName, $age]);


}











$template = 'register';
include 'layout.phtml';
?>