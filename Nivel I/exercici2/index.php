<?php

//importamos clases
require_once 'Rectangle.php';
require_once 'Triangle.php';

//creamos objetos 

$rectangle = new Rectangle (15, 4);
$triangle = new Triangle (19, 6);

//calculamos las areas usando la funciona calcularArea que hemos creado en Rectangle.php y Triangle.php, y las guardamos en $areaRectangle y $areaTriangle

$areaRectangle = $rectangle->calcularArea();
$areaTriangle = $triangle->calcularArea();

//mostramos resultado

echo "Area rectangle: " . $areaRectangle;
echo "\n" ; 
echo "Area triangle: " . $areaTriangle;

?>