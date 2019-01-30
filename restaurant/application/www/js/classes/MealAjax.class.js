

var MealAjax = function(){

	this.formView = document.getElementById('order-form');
	this.select = document.getElementById('select');
	this.mealInfo();
	this.panier = new Panier();
	this.box =[];
	console.log(this.panier);

	
	$('#select').on('change',this.mealInfo.bind(this));
	$('#ajouter').on('click',this.mealInfo.bind(this));
	

	
}

MealAjax.prototype.mealInfo = function (){

	 var id = $( "#select" ).val();
	console.log(id);



	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.save_panier.bind(this));

	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.show_infoMeal.bind(this));




}


MealAjax.prototype.show_infoMeal = function(response){


$('#order-form').empty();
		$('#order-form').append('<img src="'+getWwwUrl()+'/images/meals/'+response.Photo+'" />');
		$('#order-form').append('<p>'+response.Description+'</p>');
		$('#order-form').append('<p>'+response.SalePrice+'</p>');
		




this.showBuyMeal();


}

MealAjax.prototype.save_panier = function(response){

console.log(response);
this.box.push(response);

this.panier.saveDataToDomStorage('test',this.box);








}

MealAjax.prototype.showBuyMeal = function (){

	var buyInfo = loadDataFromDomStorage('test');

	$('#panier').append('<table>');
	$('#panier').append('<tr>');
	for(i = 0;i < buyInfo.length;i++){
		$('#panier').append('<td>'+buyInfo[i].Name+'</td');
	$('#panier').append('<td>'+buyInfo[i].Description+'</td');
	$('#panier').append('<td>'+buyInfo[i].SalePrice+'</td');
	//$('#panier').append('<td>'+buyInfo[i][name]+'</td');
	}
	$('#panier').append('<tr>');
	



}

