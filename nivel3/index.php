<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

new Email("email@emailto.com");
new Sms(92486510);
new Correo("Carrer de valencia 123, 08015, Barcelona");

Email::notificar("Esto es un mensaje via e-mail.");
Sms::notificar("Esto es un mensaje via SMS.");
Correo::notificar("Esto es un mensaje via correo fisico.");
