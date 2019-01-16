var Program = function(){

	this.jacob = new perso('jacob', 300, 50, 7, 120);
	this.fabien = new perso('fabien', 280, 45, 18, 160);
	
$('#attaquer').on('click', this.onClickAttaque.bind(this));
$('#defendre').on('click',this.onClickDefend.bind(this));
$('#sort').on('click',this.onClickSort.bind(this));
}
Program.prototype.onClickAttaque = function(event) {
	event.preventDefault();

	console.log(this);
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

Program.prototype.onClickDefend = function(event){
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




/*function fabien(){
	var choice = getRandomInteger(0, 3);

	if(choice == 1){
		this.fabien.attaque(this.jacob);
	}else if(choice == 2){
		this.fabien.defense();
	}else{
		this.fabien.magie(this.jacob);
	}
 
}*/