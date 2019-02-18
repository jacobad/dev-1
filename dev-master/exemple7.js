
/*
var age = parseInt(window.prompt('tapez votre age'));

var firstName = 'Tom';

/*

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

} else {

	document.write('<p>Vous n\'êtes pas majeur.</p>');

}

if (firstName == 'Tom' && age >= 18 ) {

	document.write('<p>Vous êtes majeur et votre nom est Tom</p>');

}

if ((firstName == 'Tom' || firstName == 'Pierre') && age > 17 ) {

		document.write('<p>Vous êtes Tom ou Pierre</p>');

}*/


var montantHt = parseFloat(window.prompt('saisir le montant'));
const tva  = montantHt * 0.2
var montantttc = montantHt + tva
var remise = window.prompt(' remise oui ou non ');




 if (remise == 'oui' || remise == 'yes'){
        var pourcentageask = parseFloat(window.prompt('quel pourcentage'));
        var pourcentage = montantttc*(pourcentageask/100);
        var prixFinal = montantttc - pourcentage;
        document.write(' le montant ttc est '+prixFinal+' la remise est de '+pourcentageask+' %');





 }
 else if ( remise == 'non' || remise == 'no' ){
        document.write(' le montant ttc est '+montantttc+' . Aucune remise n\'a été appliqué');

 }
else{

    document.write(' repondez par oui ou par non svp');
}