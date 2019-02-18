var carre = document.getElementById('div');
var deplacement = 10;
function droite(){
	deplacement+= 10;
	carre.style.left = deplacement+'px';
	
}
function gauche(){
	deplacement-= 10;
	carre.style.left = deplacement+'px';
}
function bas(){
	deplacement+= 10;
	carre.style.top = deplacement+'px';
}
function haut(){
	deplacement-= 10;
	carre.style.top = deplacement+'px';
}


function myFunction(event){

	event.preventDefault();
	if (event.keyCode == 39) {
		droite();
		
}else if(event.keyCode == 37){
		gauche();
	}else if(event.keyCode == 38){
		haut();
	}else if(event.keyCode == 40){
		bas();
	}

}


document.addEventListener('keydown',myFunction)