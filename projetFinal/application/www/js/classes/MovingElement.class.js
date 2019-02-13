
var  MovingElement = function (){

 this.move = false;

	$(document).on('click','#showElement',this.getPositionMouse.bind(this));
	$(document).on('mousedown','.move',this.registerPosition.bind(this));
	$(document).on('mousemove','.move',this.registerPositionMove.bind(this));
	$(document).on('mouseup',this.registerLastPosition.bind(this));
}

MovingElement.prototype.registerPosition = function ()
{
	
	this.move = true;
	


}
MovingElement.prototype.registerPositionMove = function(event){

	if(this.move == true ){
		var location = this.getPositionMouse(event);
		console.log('la',location )
	event.currentTarget.style.position = "absolute";
	event.currentTarget.style.top = event.clientY+"px";
	event.currentTarget.style.left = event.clientX+"px";
	
	}

}
MovingElement.prototype.registerLastPosition = function (){
  console.log('quelbail');
		this.move = false;
}
MovingElement.prototype.getPositionMouse = function(event){
	 var show = document.getElementById('showElement')
	var offset = show.getBoundingClientRect();
    
    console.log(offset);

	var location = { x: event.clientX , y: event.clientY  };
    
    console.log(location);
    
    return location;

}