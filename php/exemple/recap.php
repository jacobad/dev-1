<?php 

var_dump($_POST);
if (empty($_POST) == false){

$firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    


include 'header.phtml';
include 'recap.phtml';
include 'footer.phtml';
}else {
	header('Location: form.php');
    exit();
}


 ?>