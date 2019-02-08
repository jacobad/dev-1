<?php 


header('access-control-allow-origin: *');
header('Content-Type: application/json');

include 'class/Database.class.php';
$database = new Database();

$api_key = 'aze';
$keyword = 'je';

if (array_key_exists('id', $_GET) == true && array_key_exists('api_key', $_GET) == true && $_GET['api_key']==$api_key) {

    $sql = 'SELECT * FROM customers WHERE customerNumber = ?';


    $execute = [$_GET['id']];

    $office = $database->query($sql, $execute);


    echo json_encode($office);
    exit();
} else if (array_key_exists('keyword', $_GET) == true && array_key_exists('api_key', $_GET) == true && $_GET['api_key']==$api_key){

	$sql = 'SELECT * FROM customers WHERE contactFirstName LIKE "%" ? "%"';

	$execute = [$_GET['keyword']];

	$office = $database->query($sql, $execute);
    
    echo json_encode($office);
    exit();

}

else{

	echo 'va te faire foutre';
}





















?>