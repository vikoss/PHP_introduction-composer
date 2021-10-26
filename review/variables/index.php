<?php

// Una variable normal se establece con una sentencia como:
$a = 'hola';

// Una variable variable toma el valor de una variable y lo
// trata como el nombre de una variable.
$$a = 'mundo';
// En este momento se han definido y almacenado dos variables en el arbol
// de simbolos de PHP: $a, tiene "hola", y $hola, tiene "mundo".
echo "$a ${$a}";
// Es lo mismo que:
echo "$a $hola";

// Variables variables
$app = 'name';
$name = 'Vikoss';

echo $app;  // 'name'
echo $$app; // 'Vikoss'
