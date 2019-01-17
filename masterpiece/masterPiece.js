var canvas = document.querySelector('#masterpiece');
   
var context = canvas.getContext('2d');

function onClickCanvas(event)
{	
	console.log(event.clientX);
    console.log(event.clientY);
    
    var offset = canvas.getBoundingClientRect();
    console.log(offset);
    var position = {x: event.clientX - offset.left, y: event.clientY - offset.top }
	var disk = new Disk();
	disk.setRadius(getRandomInteger(10,50));
	disk.setColor(getRandomColor());
	disk.setPosition(position)
	disk.draw(context);
	

}


canvas.addEventListener('click', onClickCanvas);