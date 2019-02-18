'use strict'

var RequeteSend = function()
{

	$(document).on('click','#send',this.sendProduit.bind(this));

}

RequeteSend.prototype.sendProduit = function()
{
	console.log('la');
	var  form = document.getElementById('form');

	var formData  = new FormData(form);

	var file = $('photoProduct').val();

	formData.append('file',file);

	$.ajax({
  url: getRequestUrl()+"/edit",
  type: "POST",
  data: formData,
  processData: false,  // indique à jQuery de ne pas traiter les données
  contentType: false   // indique à jQuery de ne pas configurer le contentType
}).done(callback);

	function callback(){
		console.log('envoyé');

		$('#showElement').append('<?php foreach ($prod as $produit) : ?><div style="top:<?= $produit['"PositionY"']?>;left:<?= $produit['"PositionX"']?> ;position:absolute" id= <?=$produit['"Id"'] ?> class="move" width="200px" height="100px" ><img src="../membres/photoProduct/<?=$produit['"ProductPhoto"']?>"><p>Description : <?=$produit['"ProductDescription"']?></p><p> Prix :<?=$produit['"ProductPrice"']?></p><p>Quantité en stock : <?=$produit['"ProductQuantity"']?></p></div><?php endforeach ?>')
	}

}