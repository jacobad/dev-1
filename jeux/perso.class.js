var perso = function(nom, pv , ptsAttaque, ptsDef, ptsMagique){

	this.nom = nom;
	this.pv = pv;
	this.ptsAttaque = ptsAttaque;
	this.ptsDef = ptsDef;
	this.ptsMagique = ptsMagique;
}

perso.prototype.attaque = function(perso){
		var degats = this.ptsAttaque - this.ptsDef;
		if (degats < 10) {
		
		console.log(perso.name +'ne sent plus rien....' );
		degats = 10
	}
	perso.pv -= degats
    
	console.log(this.nom +' Attaque, il enlève '+ degats + ' hp a '+ perso.nom )

	console.log(perso.nom +' a  '+ perso.pv+ ' hp' );
}

perso.prototype.magie = function (objet){
		if (this.ptsMagique > 0) {
		var degats = getRandomInteger(1, this.ptsMagique);
		console.log(this.nom +  ' jete un sort,il enlève '+ degats + ' hp a '+ perso.nom);
		perso.pv -= degats;
		this.ptsMagique -=  degats;
		console.log(perso.nom +' a  '+ perso.pv+ ' hp' );
	} else {
		console.log('Vous n avez plus de point de magie....')
	}

}
perso.prototype.defense = function(){
	var ratio =  Math.round(this.ptsDef * Math.random());

		console.log(this.nom+' augmente sa defense de '+ ratio/2 + ' point ');
		this.ptsDef += ratio/2;

		console.log(this.nom +'a une defense à :'+ this.ptsDef);
}


perso.prototype.affichage = function() {

	$('#affiche').html('<p>'+this.nom+' pv=  '+this.pv+' attaque =  '+ this.ptsAttaque +' defense= '+ this.ptsDef +' magie = '+ this.ptsMagique +'</p>');
		

}