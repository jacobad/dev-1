/*var test = 23;


console.log(isNaN(test));
var test2 = "une string";


console.log(isNaN(test2));

if (isNaN(test2) == true) {

	document.write('test2 pas un chiffre');
    
} else {
	document.write('test2 chiffre');
}

// switch 


var name = "Jo"


switch (name) {

	case 'Jean':
    document.write('Vous êtes Jean');
    break;
    
    case 'Pierre':
    document.write('Vous êtes Pierre');
    break;

	case 'Jacques':
    document.write('Vous êtes Jacques');
    break;
    
    case 'Jo':
    document.write('Vous êtes Jo');
    break;
    
    default:
    document.write('Vous êtes qui');
    break;


}*/

var num1 = parseFloat(window.prompt(' saisir 1er chiffre '));
var num2 = parseFloat(window.prompt('saisir 2eme chiffre'));
var operateur = window.prompt('choisir un operateur ');


if ( (isNaN (num1) == false && isNaN(num2)) == false){

			switch (operateur){
				case '+':
				case 'addition':
				var operation = num1 + num2;
				document.write(''+operation+'');
				break;

				case '-':
				case 'soustraction' :
				var operation  = num1 - num2;
				document.write(''+operation+'');
				break;

				case '*':
				case'multiplication':
				var operation = num1 * num2;
				document.write(''+operation+'');
				break;

				case'/':
				case'division':
				var operation = num1 / num2;
				if (num2 == 0){
					document.write('erreur');
				} else {
					document.write(''+operation+'');

				}
				
				break;

				case '^':
				case 'puissance':
				var operation = num1**num2;
				break;



			}
}
else if ((isNaN (num1) == true || isNaN(num2)) == true){
				document.write( 'veuillez ecrire un chiffre');
}
else{
	document.write('error');

}
