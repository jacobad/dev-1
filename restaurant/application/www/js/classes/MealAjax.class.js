

var MealAjax = function(){

	this.formView = document.getElementById('order-form');
	this.select = document.getElementById('select');
	

	this.mealInfo();
	$('#select').on('change',this.mealInfo.bind(this));
	$('#ajouter').on('click',this.save_panier.bind(this));

	
}

MealAjax.prototype.mealInfo = function (){

	 var id = $( "#select" ).val();
	console.log(id);





	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.show_infoMeal.bind(this));




}


MealAjax.prototype.show_infoMeal = function(response){

console.log(response);

$('#order-form').empty();
		$('#order-form').append('<img src="'+getWwwUrl()+'/images/meals/'+response.Photo+'" />');
		$('#order-form').append('<p>'+response.Description+'</p>');
		$('#order-form').append('<p>'+response.SalePrice+'</p>');
		






}

MealAjax.prototype.save_panier = function(response){



saveDataToDomStorage('panier',response);







}

