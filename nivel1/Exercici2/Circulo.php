<?php

require_once 'Shape.php';
class Circulo extends Shape
{
    private float $diametro;
    public function __construct(float $diametro)
    {
        parent::__construct(null, null);
        $this->diametro = $diametro;;
    }

    public function getDiametro(): float
    {
        return $this->diametro;
    }
    public function setDiametro(float $diametro): void
    {
        $this->diametro = $diametro;
    }

    public function calcularArea(): float
    {
        return pi() * (($this->diametro / 2) ** 2);
    }
}
