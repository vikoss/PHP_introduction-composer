<?php

// Es similar a una serie de sentencias IF en la misma expresion. Compara
// la misma variable(expresion) con muchos valores diferentes.
$logged = true;
switch ($logged) {
    case true:
        echo 'Access granted';
        break;
    case false:
        echo 'Access denied';
        break;
    default:
        echo 'Nothing here';
        break;
}
# output: 'Access granted'
