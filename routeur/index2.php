<?php

session_start();

include 'config/config.class.php';
include 'librairy/Database.class.php';

$repo = 'model';
$dossier = opendir($repo);

while($fichier = readdir($dossier)){
	 if(is_file($repo.'/'.$fichier) && $fichier !='/' && $fichier !='.' && $fichier != '..'){
     
        include $repo.'/'.$fichier;
        
    }

}
closedir($dossier);

$requestUrl = $_SERVER['SCRIPT_NAME'];

$adresse = $_SERVER["REQUEST_URI"];

// $_SERVER["REQUEST_URI"]  => rooting/index2.php/register

$url = substr($adresse, 24);


//$adresse => http://10.10.109.52/rooting/index2.php/register

// $url => register

if($url == false || $url=='') {

	include 'controller/homeController.class.php';
    
    $page = 'home';
    
} else {

	include 'controller/'.$url.'Controller.class.php';
	$page = $url;
}

include 'www/layout2.phtml';

?>
