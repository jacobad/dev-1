/*var Pen = function()
{
    this.color = 'black';
    this.width = 10;
    this.position = {x:0, y:0};
    this.positionLine = {x:0, y:0};
}


Pen.prototype.setWidth = function(width)
{
    this.width = width;
}

Pen.prototype.setColor = function(color)
{
    this.color = color;
}

Pen.prototype.setPosition = function(position){
    
    this.position = position;
}
Pen.prototype.setPositionLine = function(position){
    
    this.positionLine = position;
}


Pen.prototype.draw = function(context)
{
	context.beginPath();
	context.strokeStyle = this.color;
    context.moveTo(this.position.x, this.position.y);
    context.lineTo(this.positionLine.x, this.positionLine.y);

    context.stroke();
    
}*/


var Pen = function()
{
    this.color = 'black';
    this.size  = 1;
};


Pen.prototype.configure = function(context)
{
    context.strokeStyle = this.color;
    context.lineWidth   = this.size;
};
