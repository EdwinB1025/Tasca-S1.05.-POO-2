<?php
spl_autoload_register(function ($clase) {
    include $clase . '.php';
});

$lolita = new Gato("lolita");
$teresa = new Gallina("Teresa");
$maloo = new Perro("malooo");
$anselmo = new Tigre("anselmo");
$monchita = new Vaca("monchita");

$animales = array($lolita, $teresa, $maloo, $anselmo, $monchita);

foreach ($animales as $animal) {
    echo 'Hola mi nombre es ' . $animal->nom . ' y cuando hablo sueno asi: ' . $animal->parlem() . "\n";
}
