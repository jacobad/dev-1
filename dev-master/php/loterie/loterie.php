<?php
$min = 1;
$max = 49;
$tab = [];

for($i = 0;$i<6;$i++){
	do {
		$nombre = rand ($min,$max);
	} while (in_array($nombre,$tab)==true);
	
	array_push($tab,$nombre);
	
}
//echo implode(',',$tab);



include 'loterie.phtml';
?>