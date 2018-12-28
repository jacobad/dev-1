var chiffreOrdi;
var chiffreUtil;
var essaie =0;
var petit;
var grand;
var essaiemax;

function aleatoire(min, max){

return Math.floor(Math.random() * (max - min + 1)) + min;
}

chiffreOrdi = aleatoire(1000,1);
console.log(chiffreOrdi);

do{
	chiffreUtil = parseInt(window.prompt('votre chiffre'));


		essaie++;

		if(chiffreUtil < chiffreOrdi ){
			window.alert('plus grand');

		}
		else if(chiffreUtil> chiffreOrdi) {
			window.alert('plus petit');
		} else if ( chiffreUtil == chiffreOrdi) {
			window.alert('trouvé');
		}
	 
}while(chiffreOrdi != chiffreUtil)

document.write('vous avez trouver le chiffre'+chiffreOrdi'');
document.write('vous avez fait '+essaie+'');