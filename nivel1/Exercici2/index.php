<?php

require 'Shape.php';
require 'Triangle.php';
require 'Rectangle.php';
require 'Circulo.php';

$triangulo = new Triangle(13, 6);
$rectangulo = new Rectangle(5, 6.5);
$ciruclo = new Circulo(3.5);

echo 'Area del triangulo: ' . $triangulo->calcularArea() . "\n";
echo 'Area del rectangulo: ' . $rectangulo->calcularArea() . "\n";
echo 'Area del ciruclo: ' . $ciruclo->calcularArea();
