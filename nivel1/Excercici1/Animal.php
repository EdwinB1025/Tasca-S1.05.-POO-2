<?php

abstract class Animal
{
    public string $nom {
        get => $this->nom;
        set(string $string) {
            $this->nom = strtolower($string);
        }
    }
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    abstract protected function parlem(): string;
}
