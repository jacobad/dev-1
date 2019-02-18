'use strict'

/*var animals = ['canard', 'poule', 'vache', 'cochon', 'chèvre'];

console.log(animals[1]); // poule
console.log(animals[0]); // canard
console.log(animals[4]);// chèvre


var week = new Array(); 

week[0] = "Lundi";
week[1] = "Mardi";
week[2] = 'Mercredi';
week[3] = 'Jeudi';
week[4] = 'Vendredi';
week[5] = 'Samedi';
week[6] = 'Dimanche';


console.log(week[6]);

var sunday = 6;


console.log(week[sunday]);

var date = new Date();

console.log(date);

console.log(date.getDate());
console.log(date.getDay());
console.log(date.getMonth());
console.log(date.getFullYear());*/

var date = new Date();

var week = new Array(); 

week[0] = "Lundi";
week[1] = "Mardi";
week[2] = 'Mercredi';
week[3] = 'Jeudi';
week[4] = 'Vendredi';
week[5] = 'Samedi';
week[6] = 'Dimanche';


var month = new Array(); 

month[0] = "janvier";
month[1] = "fevrier";
month[2] = 'Mars';
month[3] = 'avril';
month[4] = 'mai';
month[5] = 'juin';
month[6] = 'juillet';
month[7] = 'aout';
month[8] ='septembre';
month[9]= 'octobre';
month[10] = 'novembre';
month[11] = 'decembre';

var monthDisplay = month[date.getMonth()];
var jour = week[date.getDay()];
var chiffre = date.getDate();
var anne = date.getFullYear();


document.write('nous somme le : '+jour+' '+chiffre+' '+monthDisplay+' '+anne+' ');