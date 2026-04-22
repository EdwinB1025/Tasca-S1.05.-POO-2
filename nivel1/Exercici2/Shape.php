<?php

abstract class Shape
{
    protected ?float $ancho;

    protected ?float $alto;

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
