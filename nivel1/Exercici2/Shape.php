<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
abstract class Shape
{
    abstract protected float $ancho {
        get;
        set;
    }
    abstract protected float $alto {
        get;
        set;
    }

    protected function __construct(float $ancho, float $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    abstract protected function calcularArea(): float;
}
