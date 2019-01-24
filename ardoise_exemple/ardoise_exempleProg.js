var Program = function(canvas, canvasPalette)
{

	this.pen          = new Pen();
    this.slate       = new Slate(this.pen, canvas);

	this.start();
	this.palett = new Panel(canvasPalette);
	
	
}


Program.prototype.start = function() {

	var penColor = document.querySelectorAll('.pen-color');
    
    for (var i = 0; i < penColor.length; i++) {
    
    	penColor[i].addEventListener('click', this.onClickPenColor.bind(this));
    
    }

    var penSize = document.querySelectorAll('.pen-size');

     for (var i = 0; i < penSize.length; i++) {
    
    	penSize[i].addEventListener('click', this.onClicksize.bind(this));
    
    }

    var clearCanvas = document.getElementById('tool-clear-canvas');

    clearCanvas.addEventListener('click',this.onClickclearCanvas.bind(this));

    var colorPalette = document.getElementById('tool-color-picker');

    colorPalette.addEventListener('click',this.onClickShowCanvas.bind(this));

    $(document).on('magical-slate:pick-color', this.onPickColor.bind(this));
}


Program.prototype.onPickColor = function()
{

	var color = this.palett.getPickedColor();
	this.pen.color = 'rgb('+color.red+','+color.green+','+color.blue+')';
    
    
}



Program.prototype.onClickPenColor = function(event) {

	var color = event.currentTarget.dataset.color;

	this.pen.color = color;
}


Program.prototype.onClicksize = function(event){

	console.log('hello');

	var size = event.currentTarget.dataset.size;

	this.pen.size = size;
}


Program.prototype.onClickclearCanvas = function(event) {

	this.slate.context.clearRect(0, 0, 640, 480); 
}


Program.prototype.onClickShowCanvas = function(event){



	$('#color-palette').removeClass("hide");
}