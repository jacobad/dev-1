
var Panel = function(canvas){


this.canvas = canvas;
this.context = canvas.getContext('2d');
this.color = { red: 0, green: 0, blue: 0 };
this.start();

this.build();

}
Panel.prototype.start = function(){
	this.canvas.addEventListener('click',this.onClickPickColor.bind(this));
}

Panel.prototype.build = function()
{
    var gradient;
    gradient = this.context.createLinearGradient(0, 0, this.canvas.width, 0);
    // Dégradé rouge -> vert -> bleu horizontal.
    gradient.addColorStop(0,    'rgb(255,   0,   0)');
    gradient.addColorStop(0.15, 'rgb(255,   0, 255)');
    gradient.addColorStop(0.32, 'rgb(0,     0, 255)');
    gradient.addColorStop(0.49, 'rgb(0,   255, 255)');
    gradient.addColorStop(0.66, 'rgb(0,   255,   0)');
    gradient.addColorStop(0.83, 'rgb(255, 255,   0)');
    gradient.addColorStop(1,    'rgb(255,   0,   0)');
    this.context.fillStyle = gradient;
    this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
    gradient = this.context.createLinearGradient(0, 0, 0, this.canvas.height);
    // Dégradé blanc opaque -> transparent -> noir opaque vertical.
    gradient.addColorStop(0,   'rgba(255, 255, 255, 1)');
    gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0)');
    gradient.addColorStop(0.5, 'rgba(0,     0,   0, 0)');
    gradient.addColorStop(1,   'rgba(0,     0,   0, 1)');
    this.context.fillStyle = gradient;
    this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
};


Panel.prototype.onClickPickColor = function(event,canvas){
		var offset = this.canvas.getBoundingClientRect();

		var location = {x: event.clientX -offset.left ,y: event.clientY-offset.top};

		var color = this.context.getImageData(location.x, location.y, 1, 1);

		console.log(color);

		
    
    this.color.red = color.data[0];
    this.color.green = color.data[1];
	this.color.blue = color.data[2];



	$.event.trigger('magical-slate:pick-color');

}


Panel.prototype.getPickedColor = function()
{
    return this.color;
};

