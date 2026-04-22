<?php

require_once 'Notificacion.php';
class Email implements Notificacion
{
    static string $emailDeContacto;

    public function __construct(string $email)
    {
        self::$emailDeContacto = $email;
    }

    public static function notificar(string $string): void
    {
        echo "\nSe ha enviado el mensaje: \n$string\nA la direccion de correo: " . self::$emailDeContacto . ".";
    }
}
