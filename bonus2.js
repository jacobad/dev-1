var photo = "wwwwwwwwwbbbwwwbbwww";
var lettre = photo.charAt(0);

var result = "";
var count = 1;
console.log(photo.length);
function lre(item){
	
	for(i=1;i < photo.length;i++) {
		if(lettre != photo.charAt(i)) {
		result += count;
		result += lettre; 
		

		lettre = photo.charAt(i)
		count = 0;
		}
	
		count++;
	}

	result += count;
	result += lettre; 	

	document.write(result);
}




lre(photo);