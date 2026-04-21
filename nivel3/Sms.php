<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Sms implements Notificacion
{
    static int $numeroDeTelefono;

    public function __construct(int $telefono)
    {
        self::$numeroDeTelefono = $telefono;
    }

    public static function notificar(string $string): void
    {
        echo "\nSe ha enviado el mensaje: \n$string\nAl numero de telefono: " . self::$numeroDeTelefono . ".";
    }
}
