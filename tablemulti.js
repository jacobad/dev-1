	var number;
var table;
var i ;
var row  ;
var column;
do
{
	number = parseInt(window.prompt('Veuillez saisir un nombre :'));


}
while(isNaN(number) == true );

document.write('<table>');

for(row=1; row <= number;row++){

document.write('<tr>');
	for(column=1; column<= number;column++){
		var result = row*column;
		if(column != row){
			document.write('<td>');
			document.write(result);
			document.write('</td>');
		}
		else{
			document.write('<td class="couleur">');
			document.write(result);
			document.write('</td>');
		}
	}
document.write('</tr>');

}

document.write('</table>');