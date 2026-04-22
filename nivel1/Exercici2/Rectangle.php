<?php

require_once 'Shape.php';


class Rectangle extends Shape
{
    public function calcularArea(): float
    {
        return $this->alto * $this->alto;
    }
}
