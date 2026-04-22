<?php

require_once 'Shape.php';

class Triangle extends Shape
{
    public function calcularArea(): float
    {
        return $this->alto * $this->alto / 2;
    }
}
