<?php 



class Program {
	private $rectangle;
	private $carre;
	private $circle;
	private $ellipse;
	private $triangle;
    
    public function __construct(Rectangle $rectangle,Carre $carre,Circle $circle, Ellipse $ellipse, Triangle $triangle) {
    
    	$this->rectangle = $rectangle;
    	$this->carre = $carre;
    	$this->circle = $circle;
    	$this->ellipse = $ellipse;
    	$this->triangle = $triangle;
    
    }

	public function drawRectangle() {
		$size = $this->rectangle->getSize(); // ['width' =>200,'height' => 100];
    	$position = $this->rectangle->getPosition();
		$style = $this->rectangle->getStyle();
    
    	return '<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['height'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
    }

    public function drawCarre() {
		$size = $this->carre->getSize(); // ['width' =>200,'height' => 100];
    	$position = $this->carre->getPosition();
		$style = $this->carre->getStyle();
    
    	return '<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['width'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
    }

     public function drawCircle() {
		$size = $this->circle->getSize(); // ['width' =>200,'height' => 100];
    	$position = $this->circle->getPosition();
		$style = $this->circle->getStyle();
    
    	return '<circle cx="'.$position['x'].'" cy="'.$position['y'].'" r="'.$size['r'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></circle>';
    }

     public function drawEllipse() {
		$size = $this->ellipse->getSize(); // ['width' =>200,'height' => 100];
		$r = $this->ellipse->getCenter();
    	$position = $this->ellipse->getPosition();
		$style = $this->ellipse->getStyle();

		var_dump($r);
    
    	return '<ellipse cx="'.$position['x'].'" cy="'.$position['y'].'" rx="'.$size['r'].'" ry="'.$r.'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></ellipse>';
    }


    public function drawTriangle() {
		
		$r = $this->triangle->getCenter();
    	$position = $this->triangle->getPosition();
		$style = $this->triangle->getStyle();

		var_dump($r);
    
    	return '<polygon points="'.$position['x'].' '.$position['y'].','.$r['x1'].' '.$r['y1'].', '.$r['x2'].' '.$r['y2'].'"  fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></polygon>';
    }
    /*
    public function show(){

    	$tri = $this->drawTriangle();
    	 $ell = $this->drawEllipse();
    	 $cer = $this->drawCircle();
    	$carr = $this->drawCarre();
    	$rec =$this->drawRectangle();



    }*/






}




























?>