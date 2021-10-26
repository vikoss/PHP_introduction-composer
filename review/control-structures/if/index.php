<?php

// La expresion es evaluada a su valor booleano. Si la expresion se
// evalua como true, PHP ejecutara la sentencia y si se evalua
// como false la ignorara.
$age = 18;
if ($age <= 13) {
    echo 'Kids content';
} elseif ($age <= 18) {
    echo 'Youth content';
} else {
    echo 'All content';
}
# output: 'Youth content'
