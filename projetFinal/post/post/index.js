// au début on a un objet value

var values = {
            'str': 'azerty',
            'id': 'b'
    };

 // on l'envoie côté PHP

    $.ajax({
        url: "test.php",
        type: "POST",
        data: values,
    })
	.done(callB)
	.fail();

	// fonction de callback du post
	
	function callB(res) {


		console.log(JSON.parse(res));
	}