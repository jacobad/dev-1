var Payment = function(){


this.meal = new MealAjax();
this.totalPrice = null;
this.confirmPayment();


}
Payment.prototype.recap = function (){

	this.meal.load();


		$('#recap').empty();

	$('#recap').append('<table>');
	$('#recap table').append('<tr><td>Nom</td><td>Quantité</td><td>Prix Unitaire</td><td>Prix total</td></tr>');
	for(i = 0;i < this.meal.box.length;i++){
		var tr = $('<tr>');
		tr.append('<td><img src="'+getWwwUrl()+'/images/meals/'+this.meal.box[i].Photo+'">  '+this.meal.box[i].Name+'</td>');
		tr.append('<td>'+this.meal.box[i].quantity+'</td>');
		tr.append('<td>'+this.meal.box[i].SalePrice+'</td>');
		tr.append('<td>'+this.meal.box[i].SalePrice * this.meal.box[i].quantity+'</td>');
		
		$('#recap table').append(tr); 

		this.totalPrice += this.meal.box[i].SalePrice * this.meal.box[i].quantity;


	console.log('lad', i);
	}
	$('#recap table').append('<tr><td>Total HT</td><td>'+this.totalPrice+'</td></tr>');
	$('#recap table').append('<tr><td>TVA</td><td>'+this.totalPrice*0.20+'</td></tr>');
	$('#recap table').append('<tr><td>Prix total</td><td>'+(this.totalPrice + (this.totalPrice*0.20)) +'</td></tr>');


}


Payment.prototype.confirmPayment = function(){

	this.meal.load();
	json = JSON.stringify(this.meal.box);

	$('#confirm').attr('value',''+json+'');
}
//json_decode($_POST[]) pour decode le json en php