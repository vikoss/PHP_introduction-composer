<?php

// PHP ejecuta las sentencias anidadas, tanto como la expresion WHILE se evalue como true.
// El valor de la expresion es verificado cada vez al inicio del bucle.
$rounds = 0;
while ($rounds <= 7) {
    echo $rounds++;
}
# output: 01234567
