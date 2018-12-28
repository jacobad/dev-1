var photo = document.getElementById('photo-list');
var liste = document.querySelectorAll('#photo-list li');
var p = document.querySelector('#total span ')
console.log(liste);


function myFunction() {                         //fonction permettant de rajouter et supprimer une classe
	
    this.classList.toggle('selected');
    var selected = document.querySelectorAll('.selected');
    console.log(selected.length);
    p.textContent = selected.length;
   
}





for(i=0;i<liste.length;i++){
liste[i].addEventListener('click', myFunction);


}


