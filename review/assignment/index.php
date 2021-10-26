<?php

// Asignacion

$number = 0;
$languaje = [
    'es' => 'espa;ol',
    'en' => 'ingles'
];
// Asignacion por referencia
$a = 5;
$b = &$a;
echo $a;    // 5
echo $b;    // 5
$a = 9;
echo $a;    // 9
echo $b;    // 9
// Significa que ambas variables terminan apuntando a los
// mismos datos y nada es copiado en ninguna parte.