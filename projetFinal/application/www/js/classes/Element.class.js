

var Element = function () {


	$('#divProduit').on('click',this.addDivProduit.bind(this));
	//$(document).on('click','#send',this.show_infoProduit.bind(this));
	this.show_infoProduit;
}
Element.prototype.addDivProduit = function()
{
	$('#showform').empty();
	$('#showForm').append('<div id="product">');
	$('#showForm').append('<fieldset><legend> information produits </legend><form action="'+getRequestUrl()+'/editpage" method="POST" id="form" enctype="multipart/form-data"><ul><li><label for="productName" name="productName">Nom produit </label><input id="productName"  name="productName" type="text"></li><li><label for="ProductQuantity" name="ProductQuantity">Quantité :</label><input id="ProductQuantity"  name="ProductQuantity" type="text"></li><li><label for="ProductPrice" name="ProductPrice">Prix : </label><input id="ProductPrice"  name="ProductPrice" type="text"></li><li><label for="productDescription" name="productDescription">description produit :  </label><textarea id="productDescription"  name="productDescription" ></textarea></li><li><label for="productCategory" name="productCategory">category :</label><select id="productCategory" name="productCategory" ><option values="Automobile">Automobile</option><option values="Maison">Maison</option><option values="Informatique">Informatique</option><option values="Jeux-videos">Jeux-videos</option><option values="Sport">Sport</option><option values="Autre">Autre</option></select></li><li><label for="photoProduct" name="photoProduct">Ajoutez une photo du produit </label><input id="photoProduct" name="photoProduct" type="file" /><input id="send" type="submit" value="Envoyer le fichier" /></li>');
	//$.getJSON(getRequestUrl()+'/editpage',this.show_infoProduct.bind(this));
}
Element.prototype.show_infoProduit = function ()
{
	$.getJSON(getRequestUrl()+'/editpage',this.show_infoProduct.bind(this));

}
Element.prototype.show_infoProduct = function(response)
{
	console.log(response);
}

/*Element.prototype.showProduit = function ()
{
	var values = {
		'productName' : $('#productName').val(),
		'productDescription' : $('#productDescription').val(),
		'productCategory' : $('#productCategory').val(),
		'photoProduct' : $('#photoProduct').val(),
		'ProductQuantity' :$('#ProductQuantity').val(),
		'ProductPrice' :$('#ProductPrice').val()


	};

	$.ajax({
		url: getRequestUrl()+"/editpage",
		type: "POST",
		data : values,

		
	})
	.done(callBack)
	.fail();

console.log(getRequestUrl()+"/editpage");
	function callBack (response){
			console.log(JSON.parse(response));
	}

}
/*
Element.prototype.uploadFiles = function (event){

	event.preventDefault();
	var values = {
		'productName' : $('#productName').val(),
		'productDescription' : $('#productDescription').val(),
		'productCategory' : $('#productCategory').val(),
		'photoProduct' : $('#photoProduct').val(),
		'ProductQuantity' :$('#ProductQuantity').val(),
		'ProductPrice' :$('#ProductPrice').val()


	};

	var files = event.target.files ;

	console.log(values);
	var fd = new FormData(document.getElementById("form"));
	fd.append('values',values);

	var request = new XMLHttpRequest();
	request.open("POST", getRequestUrl()+"/editpage");
	request.send(fd);

	/*$.ajax({
  url:  getRequestUrl()+"/editpage",
  type: "POST",
  data: fd,
  processData: false,  // indique à jQuery de ne pas traiter les données
  contentType: false   // indique à jQuery de ne pas configurer le contentType
});*/


