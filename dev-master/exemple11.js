/*do {

	var name = window.prompt('nom');

	document.write('<p>'+name+'</p>');


} while(name != 'Jo');



document.write('<p>trouvé</p>')*/





do{
	var nombre = parseFloat(window.prompt('nombre'));
	document.write('<p>'+nombre+'<p>');

}while(isNaN(nombre) == true );

document.write('<p>trouvé</p>');