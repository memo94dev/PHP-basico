<?php

$nombre = readline("Ingresa tu nombre: ");
$edad = (int) readline("Ingrese su edad: ");

if ($edad < 18) {
    echo "Hola $nombre, eres menor de edad.\n";
} else if ($edad >= 18 && $edad <= 25) {
    echo "Hola $nombre, aun eres joven.\n";
} else {
    echo "Hola $nombre, ya eres adulto.\n";
}