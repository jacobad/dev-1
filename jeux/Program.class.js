var Program = function(){

	this.jacob = new perso('jacob', 300, 50, 7, 120);
	this.fabien = new perso('fabien', 280, 45, 18, 160);
	
$('#attaquer').on('click', this.onClickAttaque.bind(this));

}
Program.prototype.onClickAttaque = function(event) {
	event.preventDefault();

	console.log(this);
	this.jacob.attaque(this.fabien)

}