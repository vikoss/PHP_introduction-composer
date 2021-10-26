<?php

// La 1^ expresion($i = 0) es evaluada una vez incondicionalmente al comienzo del bucle.
// La 2^ expresion($i < 10) es verificada dependera si continua o finaliza el bucle.
// Al final de cada iteracion, se ejecuta la 3^ expresion(i++).
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
# output: 0123456789
