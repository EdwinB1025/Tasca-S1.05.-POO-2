<?php
abstract class Animal
{
    abstract protected string $nom {
        get;
        set;
    }
    protected function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    abstract protected function parlem(): string;
}
