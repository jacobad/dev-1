//type et convertion

/*var test = "42";

console.log(test);

var number = parseInt(test);

console.log(number);
*/

/*var test = "42.6";

console.log(test);

var number = parseFloat(test);

console.log(number);
*/
'use strict';

var var1= parseFloat(window.prompt('saisir montant ht'));
var var2 = var1*0.2;
var var3 = var1 + var2;
document.write("<p> montant ht :"+var1+"</p>");
document.write("<p> tva :"+var2+"</p>");
document.write("<p> montant ttc: "+var3+"</p>");

/*
'use strict'; 

const TAUX_DE_TVA = 20.0;

var montantHT;
var montantTTC;
var montantTVA;


montantHT = window.prompt('Quel est le montant HT ?');

montantHT = parseFloat(montantHT);

montantTVA = (montantHT * TAUX_DE_TVA) / 100;

montantTTC = montantHT + montantTVA;

document.write('<p>Pour un montant HT de ' + montantHT + ' € il y a ' + montantTVA + ' € de TVA.</p>');
document.write('<p>Le montant TTC est donc de ' + montantTTC + ' €.</p>');
*/