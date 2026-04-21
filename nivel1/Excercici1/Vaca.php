<?php
spl_autoload_unregister(function ($clase) {
    include $clase . 'php';
});

class Vaca extends Animal
{
    protected string $nom {
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
        return "Muuuuuuuuuuuaah.";
    }
}
