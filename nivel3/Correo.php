<?php

require_once 'Notificacion.php';


class Correo implements Notificacion
{
    static string $dierccionFisica;

    public function __construct(string $direccion)
    {
        self::$dierccionFisica = $direccion;
    }

    public static function notificar(string $string): void
    {
        echo "\nSe ha enviado el mensaje: \n$string\nA la direccion fisica: " . self::$dierccionFisica . ".";
    }
}
