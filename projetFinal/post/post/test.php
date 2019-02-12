<?php

if(empty($_POST) == false) {
	//var_dump($_POST['str']);
	// côté php je modifie ce que je veux

	$_POST['id'] = 'wxcv';

	// je renvoie côté JS dans la response du $.post() les infos modifiés

	echo json_encode($_POST);
	exit();

}


