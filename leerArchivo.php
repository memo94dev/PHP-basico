<?php

$archivo = 'texto.txt';

foreach (file($archivo) as $linea) {
    echo $linea;
}