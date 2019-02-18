'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/

var game = {}
game.difficulte = requestInteger('Niveau de difficulté ?\n' + '1. Facile - 2. Normal - 3. Difficile',1,3);
var integer;
game.hpDragon;
game.hpPlayer;
 game.armur = requestInteger('Armure ?\n' + '1. Cuivre - 2. Fer - 3. Magique',1,3);
 game.arme = requestInteger('Epée ?\n' +'1. Bois - 2. Acier - 3. Excalibur',1,3);
var count = 0;

var test;
var tour;

/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/
function initializeGame(){
	switch (game.difficulte){
		case 1 :
		game.hpPlayer = getRandomInteger(200,250);
		game.hpDragon = getRandomInteger(150,200);
		break;

		case 2 :
		game.hpPlayer = getRandomInteger(200,250);
		game.hpDragon = getRandomInteger(200,250);
		break;

		case 3 :
		game.hpPlayer = getRandomInteger(150,200);
		game.hpDragon = getRandomInteger(200,250);
		break;
	}
	switch (game.armur){
		case  1:
		game.armur = 1;
		break;

		case  2:
		game.armur = 1.25;
		break;

		case 3:
		game.armur = 2;
		break;

	}

	switch (game.arme){
		case 1:
		game.arme = 0.5;
		break

		case  2:
		game.arme = 1;
		break

		case 3:
		game.arme = 2;
		break
	}

}

function damageDragon(){
	var degatdrag;
		switch (game.difficulte){
			case 1 :
			degatdrag = getRandomInteger(10,20)/game.armur;
			break;

			case 2 : 
			degatdrag = getRandomInteger(20,30)/game.armur;
			break;

			case 3:
			degatdrag = getRandomInteger(20,30)/game.armur;
			break;


			

			}
			return  Math.floor(degatdrag);
		}

function damagePlayer(){
	var degatplayer;
		switch (game.difficulte){
			case 1 :
			degatplayer = getRandomInteger(25,30)*game.arme;
			break;

			case 2 : 
			degatplayer = getRandomInteger(15,20)*game.arme;
			break;

			case 3:
			degatplayer = getRandomInteger(5,10)*game.arme;
			break;


			

			}

			return Math.floor(degatplayer);
		}

function gameLoop (){
	do{


		tour = getRandomInteger(1,2);
		if (tour == 1){
			console.log('partie numero '+count);
			console.log('le dragon est plus rapide');
			game.hpPlayer -= damageDragon();
			console.log('hp joueur : '+ game.hpPlayer);


		}else{
			console.log('partie numero '+count);
			console.log('vous etes plus rapide');
			game.hpDragon -=  damagePlayer();
			console.log('hp dragon : '+ game.hpDragon);

		}
	count++;

	}while(game.hpDragon > 0 && game.hpPlayer > 0)
}
function showWinner(){
	if (game.hpDragon <= 0){
		console.log('vous avez terrassé le dragon ');
		document.write('<h1> bah wé morray</h1>');
		document.write('<img src="images/knight.jpg">');
		document.write('<h2>vous avez terrassé le dragon et liberé la princesse. Il vous restai '+game.hpPlayer+' de point de vie.</h2>');
	}
	else if(game.hpPlayer <= 0){
		console.log('le dragon vous a terrassé');
		document.write('<h1> boloss t\'as perdu!!</h1>');
		document.write('<img src="images/dragon.jpg">');
		document.write('<h2>vous vous etes fait boloss par le dragon . Il lui restai '+game.hpDragon+' de point de vie.</h2>');

	}

	
}
function startGame (){
	initializeGame();

console.log(damagePlayer());
console.log(damageDragon());

//console.log(test);
gameLoop();
showWinner();

}



/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
function startGame ();



