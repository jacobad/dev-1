var age = parseInt(window.prompt('tapez votre age'));

var firstName = 'Tom';

if (age >= 18) {

	document.write('<p>Vous êtes majeur.</p>');



	var name = window.prompt('Name ?');


	if (name == 'Julien') {

		document.write('<p>Vous êtes Julien</p>');
    
	} else if (name == 'Max') {

		document.write('<p>Vous êtes Max</p>');

	} else if (name == 'Jean') {

		document.write('<p>Vous êtes Jean</p>');
        
	} else {
	
    document.write('<p>Mais vous êtes qui ?</p>');

	}
}
else {

	document.write('<p>Vous n\'êtes pas majeur.</p>');
}

