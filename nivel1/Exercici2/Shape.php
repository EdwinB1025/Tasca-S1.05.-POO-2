<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
abstract class Shape
{
    protected ?float $ancho;

    protected ?float $alto;

    protected function __construct(?float $ancho, ?float $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    abstract protected function calcularArea(): float;
}
