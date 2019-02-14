
var  MovingElement = function (){

 this.itemContainer = document.getElementById('showElement');

 this.item = document.querySelectorAll('.move');

 this.itemId = 
 
 this.move = false;
 this.mouseOffset = {x:0 , y:0};


	//$(document).on('click','#showElement',this.getPositionMouse.bind(this));
	$(document).on('mousedown','.move',this.registerPosition.bind(this));
	$(document).on('mousemove','.move',this.registerPositionMove.bind(this));
	$(document).on('mouseup',this.registerLastPosition.bind(this));
}

MovingElement.prototype.registerPosition = function (event)
{
	event.preventDefault();

	this.move = true;

	this.mouseOffset = {x:event.currentTarget.offsetLeft - event.clientX , y:event.currentTarget.offsetTop - event.clientY };

	console.log(this.mouseOffset);
	this.itemId = event.currentTarget.getAttribute("id");

	/*this.item = $('#'+this.itemId+'');
	this.mouseOffset = {x:this.item.offsetLeft - event.clientX, y:this.item.offsetTop - event.clientY};
	this.move = true;*/
	


}
MovingElement.prototype.registerPositionMove = function(event){

	event.preventDefault();

	var itemOnTheWay = event.currentTarget.getAttribute("id");

	if(this.itemId != itemOnTheWay){

		this.move = false;

	}
		if(this.move == true ){

			event.currentTarget.style.position = 'absolute';
			event.currentTarget.style.left =event.clientX + this.mouseOffset.x+"px";
			event.currentTarget.style.top = event.clientY +this.mouseOffset.y+"px";
			/*var location = this.getPositionMouse(event);
			console.log('la',location )
		this.item.css('position','absolute');
		this.item.css('top',''+event.clientY + this.mouseOffset.y+'px');
		this.item.css('left',''+event.clientX + this.mouseOffset.x+'px');*/

		
		}

}
MovingElement.prototype.registerLastPosition = function (){
  console.log('quelbail');
		this.move = false;
		var values = {

			'positionX' : event.clientX + this.mouseOffset.x,
			'positionY'  : event.clientY + this.mouseOffset.y,
			'id'	     :this.itemId

		}

		console.log(values);
		$.ajax({
		url: getRequestUrl()+"/elements",
		type: "POST",
		data : values

		
	}).done(callback)
	  .fail()


	  function callback (response){

	  	//$.getJSON(getRequestUrl()+'/elements',
	  }
}

MovingElement.prototype.loadPosition = function (){


}

MovingElement.prototype.getPositionMouse = function(event){
	 var show = document.getElementById('showElement')
	var offset = show.getBoundingClientRect();
    
    console.log(offset);

	var location = { x: event.clientX , y: event.clientY  };
    
    console.log(location);
    
    return location;

}