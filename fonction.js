/*function sayHello()
{
	document.write('<p>Bonjour à toutes et à tous !</p>');
	document.write('<p>Coucou</p>');
}


sayHello();
sayHello();
sayHello();
sayHello();

function sayHelloByName(firstName, lastName)
{
    document.write('<p>Bonjour ' + firstName + ' ' + lastName + ' !</p>');
}

sayHelloByName('Marie', 'MAYERS');

sayHelloByName('Thib', 'Monesma');

var firstName = window.prompt('firstName ?');

var lastName = window.prompt('laststName ?');

sayHelloByName(firstName,lastName);

function sayHello()
{
    return 'Bonjour à toutes et à tous !';
}

var message = sayHello();
document.write('<h2>' + message + '</h2>');


function addition(num1, num2) {
	var result = num1 + num2;
    
    return result;

}

var test = addition(3, 5); //8

    var tab = ['canard', 'chien', 'chat'];

console.log(tab);

tab.push('souris');

console.log(tab);

tab.push('oie');

console.log(tab);


tab.indexOf('chien') // 1

tab.indexOf('poule')// -1

tab.splice(2, 1); // supprime chat

console.log(tab);*/

var course = new Array();
var ajout;
var supprime;
var i;
var index;


function ajouter(item,item,item,item){
	var ajout = window.prompt('ajouter un élément a la liste');
	course.push(ajout);
}

function supprimer(item){
	var supprime = window.prompt('suprimer un élement');
	course.indexOf(supprime)
	index=course.indexOf(supprime)
var i;
	if(index!= -1){
		course.splice(index,1);
	}
}

function toutsupprimer(){
	for(i=0;i < course.length;i++){
		course.slice(i,i++);
	}
}

function afficher(){
	console.log(course);
	console.log(course.length);
}




ajouter(ajout);
console.log(course);
	console.log(course.length);



ajouter(ajout);
afficher();



ajouter(ajout);
afficher();


ajouter(ajout);
afficher();



ajouter(ajout);
supprimer(supprime);
afficher();
toutsupprimer();
afficher();

// correction


