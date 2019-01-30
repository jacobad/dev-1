var Panier = function(){
	
	$.getJSON(getRequestUrl()+'/order/meal?id='+id,this.show_infoMeal.bind(this));
	



}