/*****************************************************************************************************
**************************************variable*****************************************************
********************************************************************************************/

var button = document.getElementById('toggle-rectangle');  /*vise l'element qui agit*/
var rectangle = document.querySelector('.rectangle');      //element sur lequel on agit




/************************************************************************************************
**************************************  FONCTION  **********************************************
************************************************************************************************/

function myFunction() {                         //fonction permettant de rajouter et supprimer une classe
	
    rectangle.classList.toggle('hidden');

}


function myFunction1(){
	 rectangle.classList.toggle('good');
}


function myFunction2(){
	 rectangle.classList.remove('good');
	 rectangle.classList.remove('important');
}

function myFunction3(){
	 rectangle.classList.toggle('important');
}


/***************************************************************************************************
**************************************  CODE PRINCIPAL***********************************************
****************************************************************************************************/




button.addEventListener('click', myFunction);                // addEventListener permet d'éco uter l'evenement choisi sur l'element choisi
rectangle.addEventListener('mouseover',myFunction1);
rectangle.addEventListener('mouseout',myFunction2);
rectangle.addEventListener('dblclick',myFunction3);

