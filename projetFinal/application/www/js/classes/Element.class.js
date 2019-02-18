

var Element = function () {


	$('#divProduit').on('click',this.addDivProduit.bind(this));
	
	
	$('#divText').on('click',this.addText.bind(this));

}
Element.prototype.addDivProduit = function()
{

	$('#showForm').empty();

	$('#showForm').append('<div id="product">');
	$('#showForm').append('<fieldset><legend> information produits </legend><form action="'+getRequestUrl()+'/edit" method="" id="form" enctype="multipart/form-data"><ul><li><label for="productName" name="productName">Nom produit </label><input id="productName"  name="productName" type="text"></li><li><label for="ProductQuantity" name="ProductQuantity">Quantité :</label><input id="ProductQuantity"  name="ProductQuantity" type="text"></li><li><label for="ProductPrice" name="ProductPrice">Prix : </label><input id="ProductPrice"  name="ProductPrice" type="text"></li><li><label for="ProductDescription" name="ProductDescription">description produit :  </label><textarea id="ProductDescription"  name="ProductDescription" ></textarea></li><li><label for="productCategory" name="productCategory">category :</label><select id="productCategory" name="productCategory" ><option values="Automobile">Automobile</option><option values="Maison">Maison</option><option values="Informatique">Informatique</option><option values="Jeux-videos">Jeux-videos</option><option values="Sport">Sport</option><option values="Autre">Autre</option></select></li><li><label for="photoProduct" name="photoProduct">Ajoutez une photo du produit </label><input id="photoProduct" name="photoProduct" type="file" /><input id="send" type="button" value="Envoyer le fichier" /></li>');
	
}

Element.prototype.addText = function()
{

	$('#showForm').empty();

	$('#showForm').append('<div id="text">');

	$('#showForm').append('<fieldset><legend>Votre texte </legend><form action="'+getRequestUrl()+'/edit"  id="form"><textarea id="Text" name="Text"></textarea><button type="submit" >Envoyer</button></form>');

}

