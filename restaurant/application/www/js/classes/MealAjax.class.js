

var MealAjax = function(){

	this.formView = document.getElementById('order-form');
	this.select = document.getElementById('select');
	this.mealInfo();
	this.panier = new Panier();
	this.box =[];
	this.load();
	console.log(this.panier);
	//this.showBuyMeal();

	
	$('#select').on('change',this.mealInfo.bind(this));
	$('#ajouter').on('click',this.storageInfo.bind(this));
	$(document).on('click','#suprimer',this.removeOrder.bind(this));
	

	
}

MealAjax.prototype.load = function() {
	this.box = loadDataFromDomStorage('test');
	if(this.box == null) {
		this.box = [];
	}
	this.showBuyMeal();
}

MealAjax.prototype.mealInfo = function (){

	 var id = $( "#select" ).val();
	console.log(id);



	

	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.show_infoMeal.bind(this));




}
MealAjax.prototype.storageInfo = function (){

	 var id = $( "#select" ).val();
	console.log(id);



	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.save_panier.bind(this));





}


MealAjax.prototype.show_infoMeal = function(response){


$('#order-form').empty();
		$('#order-form').append('<img src="'+getWwwUrl()+'/images/meals/'+response.Photo+'" />');
		$('#order-form').append('<p>'+response.Description+'</p>');
		$('#order-form').append('<p>'+response.SalePrice+'</p>');
		







}

MealAjax.prototype.save_panier = function(response){


response.quantity = parseInt($('#quantity').val());
console.log('res', response);

for(i = 0; i < this.box.length ; i++){
	if(this.box[i].Id == parseInt(response.Id)){
		this.box[i].quantity += response.quantity;

		this.panier.saveDataToDomStorage('test',this.box);
		this.showBuyMeal();
		return;
	}


}

this.box.push(response);             

this.panier.saveDataToDomStorage('test',this.box);
this.showBuyMeal();



}

MealAjax.prototype.showBuyMeal = function (){


	$('#panier').empty();

	$('#panier').append('<table>');
	$('#panier table').append('<tr><td>Nom</td><td>Quantité</td><td>Prix Unitaire</td><td>Prix total</td></tr>');
	for(i = 0;i < this.box.length;i++){
		var tr = $('<tr>');
		tr.append('<td>'+this.box[i].Name+'</td>');
		tr.append('<td>'+this.box[i].quantity+'</td>');
		tr.append('<td>'+this.box[i].SalePrice+'</td>');
		tr.append('<td>'+this.box[i].SalePrice * this.box[i].quantity+'</td>');
		tr.append('<button id="suprimer" type="button" data-id="'+this.box[i].Id+'">suprimer</button>');
		$('#panier table').append(tr);


	
	}

MealAjax.prototype.removeOrder = function (){

	var i = $(this).data('id');
	console.log(i);
	 this.box.splice(i,1);
	this.panier.saveDataToDomStorage('test',this.box);
	this.showBuyMeal();


}


}

