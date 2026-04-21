<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Circulo extends Shape
{
    protected float $diametro;
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
