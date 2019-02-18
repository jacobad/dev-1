<?php  
include 'utilities.php';

function removeTasks(array $allTasks, array $indexes)
{
	$tasks = [];
    
    foreach($allTasks as $index => $value)
    {
    	if(in_array($index, $indexes) == false)
        {
        	array_push($tasks, $value);
        }
    
    }
    
    return $tasks;

}



if(empty($_POST) == false) {

	var_dump($_POST["supprimer"]);
	
    $allTasks = pushTask();
    
    $tasks = removeTasks($allTasks, $_POST['supprimer']);

	saveTasks($tasks);
}


header('Location: todo.php');
exit();












?>