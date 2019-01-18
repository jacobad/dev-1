/*var canvas = document.querySelector('#ardoise');
   
var context = canvas.getContext('2d');


function mouseDownCanvas(event)
{	event.preventDefault();
	console.log(event.clientX);
    console.log(event.clientY);
    
    var offset = canvas.getBoundingClientRect();
    console.log(offset);
    var position = {x: event.clientX - offset.left, y: event.clientY - offset.top };
    console.log(position);

	    canvas.addEventListener('mousemove', mouseMoveCanvas);
	    function mouseMoveCanvas(event)
	    {
	    	console.log(positionLine);
    		
	    	var location = {x: event.clientX - offset.left, y: event.clientY - offset.top };
	    	position = location;

		    var positionLine = {x: event.clientX - offset.left, y: event.clientY - offset.top };
		    canvas.addEventListener('mousemove', mouseMoveCanvas);
			var pen = new Pen();
			pen.setColor("black");
			pen.setWidth(10);
			pen.setPosition(position);
			pen.setPositionLine(positionLine);

			pen.draw(context);
		}

}*/
















