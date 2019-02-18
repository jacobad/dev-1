'use strict'

var RequeteSend = function()
{

	$(document).on('click','#send',this.sendProduit.bind(this));

}

RequeteSend.prototype.sendProduit = function()
{
	console.log('la');
	var  form = document.getElementById('form');

	var formData  = new FormData(form);

	var file = $('photoProduct').val();

	formData.append('file',file);

	$.ajax({
	  url: getRequestUrl()+"/edit",
	  type: "POST",
	  data: formData,
	  processData: false,  // indique à jQuery de ne pas traiter les données
	  contentType: false   // indique à jQuery de ne pas configurer le contentType
	}).done(callback);



}

RequeteSend.prototype.deleteProduit = function(){



}


function callback(response){
	console.log('envoyé');
var i;
	console.log(response);
	 var res = JSON.parse(response);

	  console.log(res);
	  $('#showElement').empty();

	  for(i = 0;i< res.length ; i++){

	  	if (res[i].PositionY != null) {
	  		$('#showElement').append('<div style=" top : '+res[i].PositionY+'; left : '+res[i].PositionX+'; position:absolute" id="'+res[i].Id+'" class="move" width ="200px" height="100px"></div>');

	  	} else {
	  		$('#showElement').append('<div id="'+res[i].Id+'" class="move" width ="200px" height="100px"></div>');

	  	}
	  	
	  	$('#showElement #'+res[i].Id+'').append('<img src="../membres/photoProduct/'+res[i].ProductPhoto+'">');
	  	$('#showElement #'+res[i].Id+'').append('<p>Description : '+res[i].ProductDescription+' </p>');
	  	$('#showElement #'+res[i].Id+'').append('<p>Prix : '+res[i].ProductPrice+' </p>');
	  	$('#showElement #'+res[i].Id+'').append('<p>Prix : '+res[i].ProductQuantity+' </p>');
	  	$('#showElement #'+res[i].Id+'').append('<a href="'+getRequestUrl()+'/edit?id='+res[i].Id+'">supprimer</a>');
	  	

	
	}
}

	//$.getJSON(getRequestUrl()
