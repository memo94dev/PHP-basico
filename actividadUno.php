<?php

$actividad = readline("Ingrese el número de la actividad (1-5): ");

switch ($actividad) {
    case 1:
        echo "Calculadora:\n";
        include "calculadora.php";
        break;
    case 2:
        echo "Leer Archivo txt:\n";
        include "leerArchivo.php";
        break;
    case 3:
        echo "Registrar Nombre y Edad:\n";
        include "registrarNombre.php";
        break;
    case 4:
        echo "Contar hasta 10:\n";
        include "contar.php";
        break;
    case 5:
        echo "Mostrar dias de la Semana:\n";
        include "semana.php";
        break;
    default:
        echo "Actividad no válida.\n";
        break;
}