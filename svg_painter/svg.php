<?php 


include 'shape.class.php';
include 'rectangle.class.php';
include 'carre.class.php';
include 'cercle.class.php';
include 'ellipse.class.php';
include 'triangle.class.php';
include 'program.class.php';


$rectangle = new Rectangle('50', '20', '200', '100', 'firebrick', '1');
$carre = new Carre('350','80','100','yellow','1');
$cercle = new Circle('400','120','10','pink','0.5');
$ellipse = new Ellipse('500','200','50','20','purple','1');
var_dump($ellipse);

$triangle = new Triangle('150','215','200','300','100','300','green','0.5' );
$prog = new Program($rectangle,$carre,$cercle,$ellipse,$triangle);

$rec = $prog->drawRectangle();
$carr = $prog->drawCarre();
$cer = $prog->drawCircle();
$ell = $prog->drawEllipse();
$tri = $prog->drawTriangle();

var_dump($rec);
var_dump($ell);




































include 'svg.phtml';

?>