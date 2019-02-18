'use strict';

/***********************************************************************************/
/* *********************************** DONNEES *************************************/
/***********************************************************************************/
var compte = document.querySelector('#billboard span');
var fireButton = document.getElementById('firingButton');
var rocket = document.getElementById('rocket');
var stop = document.getElementById('stopButton');
var src = rocket.getAttribute('src');
var comptage = 10;
var timer;

/***********************************************************************************/
/* ********************************** FONCTIONS ************************************/
/***********************************************************************************/
/*function comptage(){
	comptage-=1
		


	}*/


function pushFire() {
	timer = window.setInterval(timeTest, 1000);	
}

function timeTest()
{
	comptage --;
    
	compte.textContent = comptage;
	rocket.setAttribute('src','images/rocket2.gif')
    
    if(comptage == 0) {
    
    	window.clearInterval(timer);
    	rocket.setAttribute('src','images/rocket3.gif')
    	rocket.classList.add('tookOff');
  
    }
}

function stop(){
	

}



/************************************************************************************/
/* ******************************** CODE PRINCIPAL **********************************/
/************************************************************************************/

fireButton.addEventListener('click', pushFire);
