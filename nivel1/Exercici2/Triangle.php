<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Triangle extends Shape
{
    protected float $ancho;
    protected float $alto;
    public function __construct(float $ancho, float $alto)
    {
        parent::__construct($ancho, $alto);
    }

    public function getAncho(): float
    {
        return $this->ancho;
    }
    public function getAlto(): float
    {
        return $this->alto;
    }

    public function setAncho(float $ancho): void
    {
        $this->ancho = $ancho;
    }

    public function setAlto(float $alto): void
    {
        $this->alto = $alto;
    }

    public function calcularArea(): float
    {
        return $this->alto * $this->ancho / 2;
    }
}
