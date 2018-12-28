<?php

function saveTask(array $taskData)
{
	$file = fopen('tasks.csv', 'a');
    
    fputcsv($file, $taskData);
    
    fclose($file);
    
}

function pushTask(){
	$tasks = [];
	$file = fopen('tasks.csv', 'a+');

	while(true){


		$line = fgetcsv($file);
		
		if($line == false){
			break;
		}
		array_push($tasks, $line);
	}
	
	fclose($file);
	return $tasks;
}



function saveTasks(array $tasks)
{
	$file = fopen('tasks.csv', 'w');
    
    foreach($tasks as $taskData)
	{
    	fputcsv($file, $taskData);
    }
    
    fclose($file);

}




?>