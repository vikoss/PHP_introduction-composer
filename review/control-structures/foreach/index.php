<?php

// Un modo sencillo de iterar sobre arrays.
$userAddresses = [
    'Juan'      => 'Miguel Hidalgo, 11529 Ciudad de México, CDMX',
    'Victor'    => 'Miguel Hidalgo, 11600 Ciudad de México, CDMX'
];
foreach ($userAddresses as $user => $address) {
    //   $values        as $key  => $value
    echo "{$user} vive en {$address}.\n";
}
# output:
// Juan vive en Miguel Hidalgo, 11529 Ciudad de México, CDMX.
// Victor vive en Miguel Hidalgo, 11600 Ciudad de México, CDMX.