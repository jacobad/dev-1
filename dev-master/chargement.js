
var fill = document.getElementById("fill");
var percent = document.getElementById("percent");
var size = 0;
var timer;

//var h1 = document.querySelector('h1');

//h1.textContent = "hello"; //<h1> Hello</h1>

function interval()
{
	size += 2;
    fill.style.width=size+"%";
	percent.textContent = size+"%";
    
    if(size >= 100) {
    
    	window.clearInterval(timer);
    	var haut = document.getElementById("up");
    	var bas = document.getElementById("down");
    	haut.style.backgroundColor ="red";
    	haut.setAttribute('transform','translateX(10000px)');
    	bas.style.transform = "translateY(-1000px)";
  
    }
}


timer = window.setInterval(interval,50)
