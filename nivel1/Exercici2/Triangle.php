<?php

require 'Shape.php';

class Rectangle extends Shape
{
    public function calcularArea(): float
    {
        return parent::getAlto() * parent::getAncho() / 2;
    }
}
