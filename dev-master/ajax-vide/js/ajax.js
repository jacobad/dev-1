'use strict';

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/


function myFunction(response) {

	console.log(response);
$('#target').html(response);
}


function json (response){
	console.log(response);
	$('#target').empty();
	$('#target').append('<ul>')
	for(var i=0;i < response.length ;i++){
		$('#target ul').append('<li> nom : '+response[i].firstName+', Tel : '+response[i].phone+'</li>');
		

	}
}