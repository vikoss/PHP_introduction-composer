<?php

// A diferencia de la estructura de control 'while'
// esta se ejecuta al menos una vez ya que la
// condicion esta despues de el 'do'.
// Y la expresion es verificada cada vez al final de cada iteracion.
do {
    echo $rounds;
} while ($rounds <= 7);
# output: 7
