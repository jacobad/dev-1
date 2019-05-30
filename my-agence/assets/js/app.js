/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
 const $ = require('jquery');



console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

$('#show').on('click',showForm);
$('#sendPictures').on('click',addPicture);

function showForm(){   
    console.log('test');
    $('.picturesShow').toggle();  
}

function addPicture(){
    
    var picture = document.getElementById('file');
    var formData = new FormData(picture);

    console.log(formData);
    var url = Routing.generate('admin.property.new');

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,  // indique à jQuery de ne pas traiter les données
        contentType: false   // indique à jQuery de ne pas configurer le contentType
      }).done();

  
}
