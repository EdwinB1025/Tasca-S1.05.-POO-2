<?php
spl_autoload_register(function ($clase) {
    include $clase . '.php';
});

class Gallina extends Animal
{
    public string $nom {
        get => $this->nom;
        set(string $string) {
            $this->nom = strtolower($string);
        }
    }
    public function __construct(string $nom)
    {
        parent::__construct($nom);
    }
    public function parlem(): string
    {
        return "Cucurucuuu!";
    }
}
