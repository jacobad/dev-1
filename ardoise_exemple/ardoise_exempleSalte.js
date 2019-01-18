var Slate = function(pen,canvas){
	this.canvas = canvas; 
	this.context = canvas.getContext('2d');
	this.pen             = pen;
	this.currentLocation = null;
	this.drawing = false;



	this.canvas.addEventListener('mousedown',this.onMouseDownCanvas.bind(this));
	this.canvas.addEventListener('mousemove',this.onMouseMoveCanvas.bind(this));
	this.canvas.addEventListener('mouseup',this.onMouseleaveCanvas.bind(this));
	this.canvas.addEventListener('mouseleave',this.onMouseleaveCanvas.bind(this));
}
Slate.prototype.onMouseDownCanvas = function (event){
		console.log('hello');
		this.currentLocation = this.getPositionMouse(event);
		this.drawing = true;

}
Slate.prototype.onMouseMoveCanvas = function(event){
		
		if(this.drawing == true){
		var position = this.getPositionMouse(event);
		this.context.beginPath();
		this.pen.configure(this.context);
		this.context.moveTo(this.currentLocation.x ,this.currentLocation.y);
		this.context.lineTo(position.x ,position.y);
		this.context.stroke();
		this.currentLocation = position;
		}

}

Slate.prototype.getPositionMouse = function(event){

	var offset = this.canvas.getBoundingClientRect();
    
    
	var location = { x: event.clientX - offset.left, y: event.clientY - offset.top };
    
    console.log(location);
    
    return location;

}
Slate.prototype.onMouseleaveCanvas = function(){
	this.drawing = false;
	console.log('hello');
}