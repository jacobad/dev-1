var Program = function(){

	this.jacob = new perso('jacob', 300, 50, 7, 120);
	this.fabien = new perso('fabien', 280, 45, 18, 160);
	console.log('instancié');
$('#attaquer').on('click', this.onClickAttaque.bind(this));
$('#defendre').on('click',this.onClickDefend.bind(this));
$('#sort').on('click',this.onClickSort.bind(this));
}
Program.prototype.onClickAttaque = function(event) {
	
	event.preventDefault();


	console.log(this);


	this.jacob.attaque(this.fabien);
	$('.image #jacob').addClass("attaque");

	var choice = getRandomInteger(0, 3);
	
	this.fabienAttaque();
	this.jacob.afficher(this.fabien);

	this.stop();
	


}

Program.prototype.onClickDefend = function(event){
	
	event.preventDefault();

	console.log('bonjour');

	this.jacob.defense();

	var choice = getRandomInteger(0, 3);

	
	this.fabienAttaque();
	this.jacob.afficher(this.fabien);

	this.stop();

}


Program.prototype.onClickSort = function(event){
	
	event.preventDefault();

	this.jacob.magie(this.fabien);

	var choice = getRandomInteger(0, 3);
	
	this.fabienAttaque();

	this.jacob.afficher(this.fabien);
	this.stop();
	
}




Program.prototype.fabienAttaque = function(){
	var choice = getRandomInteger(0, 3);


	this.jacob.attaque(this.fabien);

	var choice = getRandomInteger(0, 3);
	
if(choice == 1){
		this.fabien.attaque(this.jacob);
	}else if(choice == 2){
		this.fabien.defense();
	}else{
		this.fabien.magie(this.jacob);
	}


}

/*Program.prototype.onClickDefend = function(event){
	event.preventDefault();
	this.jacob.defense();

	var choice = getRandomInteger(0, 3);

	if(choice == 1){
		this.fabien.attaque(this.jacob);
	}else if(choice == 2){
		this.fabien.defense();
	}else{
		this.fabien.magie(this.jacob);
	}
}


Program.prototype.onClickSort = function(event){
	event.preventDefault();

	this.jacob.magie(this.fabien);

	var choice = getRandomInteger(0, 3);
	if(choice == 1){
		this.fabien.attaque(this.jacob);
	}else if(choice == 2){
		this.fabien.defense();
	}else{
		this.fabien.magie(this.jacob);
	}
}




function fabien(){
	var choice = getRandomInteger(0, 3);

>>>>>>> dae2cc975741098fa62b8f3ed6b1c4a775b159f2
	if(choice == 1){
		this.fabien.attaque(this.jacob);
	}else if(choice == 2){
		this.fabien.defense();
	}else{
		this.fabien.magie(this.jacob);
	}
 
<<<<<<< HEAD
}

Program.prototype.afficher = function(perso){

	$('#perso1').html('<p>'+this.perso.nom+' pv=  '+perso.pv+' attaque =  '+ perso.ptsAttaque +' defense= '+ perso.ptsDef +' magie = '+ perso.ptsMagique +'</p>');
		
}*/

Program.prototype.stop = function(){
	if(this.fabien.pv == 0 || this.fabien.pv < 0){
		$('#affiche').html('<p>jacob tu t\'es fais eclaté</p> ');
	}else if(this.jacob.pv == 0 ||this.jacob < 0){
		$('#affiche').html('<p>fabien tu t\'es fais eclaté</p> ');
	}


}





