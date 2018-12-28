<?php



$translateWord = [

		'chien' => 'dog',
		'voiture'=> 'car',
		'chat'=> 'cat',
		'telephone'=> 'phone',
		'loup'=> 'wolf'
];


function tolanguage($word, $translateWord, $direction){
if ($direction == 'toEnglish'){
	if(array_key_exists($word, $translateWord)== true){
		$trad = $translateWord[$word];
    	var_dump($trad);
    }else{
    	var_dump('ce mot existe pas ');
    }
}else if ($direction == 'toFrench'){
	 if (in_array($word, $translateWord)== true){
			$trad = array_search($word, $translateWord);
			var_dump($trad );


	}else{
		var_dump('ce mot existe pas ');
	}
}
}

if(array_key_exists('mot', $_POST) == true)
{
	$word = $_POST['mot'];
	$direction = $_POST['langue'];
    var_dump($direction);
    tolanguage($word, $translateWord, $direction);

}









































include "traducteur.phtml";
?>