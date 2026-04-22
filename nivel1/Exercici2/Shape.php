<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
abstract class Shape
{
    private ?float $ancho;

    private ?float $alto;

    public function __construct(?float $ancho, ?float $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
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

    abstract protected function calcularArea(): float;
}
