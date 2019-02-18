<?php 
include 'utilities.php';

function addtask($titre,$tache,$date,$priority){

	
    $taskData =
    [
        $titre,
        $tache,
        $date,
        $priority
    ];
    
    saveTask($taskData);








}







if (empty($_POST) == false){
$titre= $_POST['title'];
var_dump($titre);
$tache = $_POST['tache'];
var_dump($tache);
$date = $_POST['jour'].'-'. $_POST['mois'].'-'. $_POST['annee'];
var_dump($date);
$priority = $_POST['priority'];
var_dump($priority);


 addTask($titre, $tache, $date, $priority);


}

$now = date_create();
$tasks = pushTask();





include 'todo.phtml';
?>