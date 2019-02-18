'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var barreOutil = document.querySelector('#toolbar-toggle');
var nav = document.querySelector('#tools');
var previous = document.getElementById('slider-previous');
var play = document.getElementById('slider-toggle');
var next = document.getElementById('slider-next');
var random = document.getElementById('slider-random');
var slider = document.querySelector('#slider img')
var src = slider.getAttribute('src');
var timer;
var isPlaying = false;
var faPlay = document.querySelector('#slider-toggle i')
var count = 0;
var photo = ["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg","images/6.jpg"]
var index = ["jacob","jacob","jacob","jacob","jacob","jacob"]




/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function toolbar(){
	nav.classList.toggle('hide');
}
function nextPic(){
	count++;
	slider.src= photo[count];
	if( count > 5){
		count = 0;
		slider.src= photo[count];

	}

}
function time(){

	if(isPlaying == false){

		timer = window.setInterval(nextPic,1500);
		isPlaying = true;

	}else {
		window.clearInterval(timer);
		isPlaying = false;
	}
	faPlay.classList.toggle('fa-play');
	faPlay.classList.toggle('fa-pause');

}


function pause(){

}

function previousPic(){
	count--;
	slider.src= photo[count];
	if( count < 0){
		count = 5;
		slider.src= photo[count];

	}

}
function getRandomInteger(min, max) {

	return Math.floor(Math.random() * (max - min + 1)) + min;

}



function randomPlayer(){
var number = getRandomInteger(0, 5);

	slider.src= photo[number];
	
	}
function myFunction(event){
	event.preventDefault();
	console.log(event.keyCode);

	if (event.keyCode == 39) {
		nextPic();
	}else if(event.keyCode == 37){
		previousPic();
	}else if(event.keyCode == 80){
		console.log('?');
		time();
	}else if(event.keyCode == 82){
		randomPlayer();
	}
}



/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
barreOutil.addEventListener('click', toolbar);
next.addEventListener('click',nextPic);
previous.addEventListener('click',previousPic);
play.addEventListener('click',time);
random.addEventListener('click',randomPlayer);
slider.src= photo[0];

document.addEventListener('keyup',myFunction)
