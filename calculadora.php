<?php

$operacion = readline("Ingresa la operación a realizar (suma = 1 o resta = 2) o pulse 0 para salir: ");

if ($operacion != '1' && $operacion != '2' && $operacion != '0') {
    echo "Operación no válida. Por favor, ingresa 1 para suma o 2 para resta.\n";
}else if ($operacion == '1') {
    $numero1 = (int) readline("Ingresa el primer número entero: ");
    $numero2 = (int) readline("Ingresa el segundo número entero: ");
    $resultado = $numero1 + $numero2;
    echo "El resultado de la suma es: $resultado\n";
} else if ($operacion == '2') {
    $numero1 = (int) readline("Ingresa el primer número entero: ");
    $numero2 = (int) readline("Ingresa el segundo número entero: ");
    $resultado = $numero1 - $numero2;
    echo "El resultado de la resta es: $resultado\n";
} else if ($operacion == '0') {
    echo "Saliendo de la calculadora. ¡Hasta luego!";
    exit(0);
}
?>