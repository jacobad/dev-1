/*var chiffre = Math.random();

console.log(chiffre);
var num = 2.8;

console.log(Math.round(num));

var string = 'PAUL';

console.log(string.toLowerCase());*/



var choix = (window.prompt('faites votre choix ')).toLowerCase();
document.write('vous avez choisi '+choix+'');


var choixOrdi = Math.random()*3;

console.log(choixOrdi);

if (choixOrdi <= 1){
	document.write('lordi a choisi pierre.' );
}
else if (choixOrdi > 1 && choixOrdi <= 2){
	document.write(' lordi a choisi feuille');
}
else {
	document.write('lordi a choisi ciseau');
}


switch (choix){
	case 'pierre':
		if (choixOrdi <= 1){
			document.write('match nul');
		}
		else if (choixOrdi> 1 && choixOrdi <=2){
			document.write('VOUS AVEZ PERDU ');
		}
		else if (choixOrdi >2 && choixOrdi<=3){
			document.write('vous avez gagné');
		}
		else{
			break;
		}
		break;

	case 'feuille':
		if (choixOrdi <= 1){
			document.write('vous avez PERDU');
		}
		else if (choixOrdi> 1 && choixOrdi <=2){
			document.write('match nul ');
		}
		else if (choixOrdi >2 && choixOrdi<=3){
			document.write('vous avez gagné');
		}
		else{
			break;
		}
		break;

	case 'ciseau':
		if (choixOrdi <= 1){
			document.write('VOUS AVEZ PERDU');
		}
		else if (choixOrdi> 1 && choixOrdi <=2){
			document.write('VOUS AVEZ gagné');
		}
		else if (choixOrdi >2 && choixOrdi<=3){
			document.write('match nul');
		}
		else{
			break;
		}
		break;	
}
