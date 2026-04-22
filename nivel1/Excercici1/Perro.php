<?php

require_once 'Animal.php';

class Perro extends Animal
{
    public function parlem(): string
    {
        return "Guau Guau!";
    }
}
