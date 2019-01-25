<?php
session_start();

include 'dataBase_class.php';

/*$data = new Database();

$users = $data->query('SELECT * FROM users', [] );

var_dump(sers);*/


$template = 'index';
include 'layout.phtml';


?>