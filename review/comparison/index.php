<?php

// $a == $b    # Igual
// $a === $b   # Identico
// $a != $b    # Diferente
// $a <> $b    # Diferente
// $a !== $b   # No Identico
// $a < $b     # Menor que
// $a > $b     # Mayor que
// $a <= $b    # Menor o igual que
// $a >= $b    # Mayor o igual que
// $a <==> $b  # Nave espacial
// $a ?? $b    # Fusion de null

// Comparacion

// (==) Verifica si el valor es igual (sin importar el tipo de dato).
$numberEqual = '9' == 9;    // TRUE
$numberEqual = 9 == 9;      // TRUE

// (===) Verifica si el valor y el tipo de dato es igual.
$numberEqual = '9' === 9;   // FALSE
$numberEqual = 9 === 9;     // TRUE

// (!=) Verifica si el valor es diferente (sin importar el tipo de dato).
$numberEqual = '9' != 9;    // FALSE
$numberEqual = 9 != 9;      // FALSE
$numberEqual = 5 != 6;      // TRUE

// (!==) Verifica si el valor y el tipo de dato es diferente.
$numberEqual = '9' !== 9;   // TRUE
$numberEqual = 9 !== 9;     // FALSE

// (<, >, <=, >=) Verifica si el valor es menor, mayor, menor o igual, mayor o igual
//                (sin importar el tipo de dato).
$number = 9 < 5;    // FALSE
$number = 9 > 5;    // TRUE
$number = 9 <= 9;   // TRUE
$number = 9 >= 2;   // FALSE

// (??) El primer operando de la izquierda a derecha que exista y no sea null.
$x ?? $y ?? $z ?? 'nothing'; // 'nothing'
