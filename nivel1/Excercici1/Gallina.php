<?php

require_once 'Animal.php';

class Gallina extends Animal
{
    public function parlem(): string
    {
        return "Cucurucuuu!";
    }
}
