<?php

include 'Gato.php';
include 'Gallina.php';
include 'Perro.php';
include 'Tigre.php';
include 'Vaca.php';

$lolita = new Gato("lolita");
$teresa = new Gallina("Teresa");
$maloo = new Perro("malooo");
$anselmo = new Tigre("anselmo");
$monchita = new Vaca("monchita");

$animales = array($lolita, $teresa, $maloo, $anselmo, $monchita);

foreach ($animales as $animal) {
    echo 'Hola mi nombre es ' . $animal->nom . ' y soy un(a) ' . $animal::class . ', y cuando hablo sueno asi: ' . $animal->parlem() . "\n";
}
