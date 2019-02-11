
var Element = function (){



	$('#divProduit').on('click',this.addDivProduit.bind(this));
	$(document).on('click','#send',this.showProduit.bind(this));
}

Element.prototype.addDivProduit = function () {
     console.log('la');
     	$('#show').empty();
	$('#show').append('<div id="produit" >');
	$('#show div').append('<fieldset><legend> information produits </legend><form  id="produitform" method="POST" enctype="multipart/form-data"><ul><li><label for="productName" name="productName">Nom produit </label><input id="productName"  name="productName" type="text"></li><li><label for="productDescription" name="productDescription">description produit :  </label><textarea id="productDescription"  name="productDescription" ></textarea></li><li><label for="productCategory" name="productCategory">category :</label><select id="productCategory" name="productCategory" ><option values="Automobile">Automobile</option><option values="Maison">Maison</option><option values="Informatique">Informatique</option><option values="Jeux-videos">Jeux-videos</option><option values="Sport">Sport</option><option values="Autre">Autre</option></select></li><li><label for="photoProduct" name="photoProduct">Ajoutez une photo du produit </label><input id="photoProduct" name="photoProduct" type="file" /><button type="button" id="send"></button></li></ul></form></fieldset>');


}
/*Element.prototype.addDivTitre = function () {

	$('#show').append('<div id="title" >');
	$('#show div').append('<')
}*/

Element.prototype.showProduit = function() {

        var data = {
        	'productName':$('#productName').val(),
         'productDescription':$('#productDescription').val(),
         'productCategory' : $('#productCategory').val(),
         'photoProduct' :$('#photoProduct').val(),
     	};

     	console.log(data);
        $.ajax({
            type: "POST",
            data: data,
            url: getRequestUrl()+'/elements',
})
           	.done(callB)
	.fail( function(error) {
    	
        console.log(error);
    
    });


}
function callB(res) {

	console.log(res);

	//var response = JSON.parse(res)
    //$('#para').text(response.query);
}




