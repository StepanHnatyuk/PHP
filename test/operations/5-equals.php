<?php

// == is a bad idea (dynamic types, unpredictable behaviour)
// === always use this (checks types)

$var = 'text';

if ($var == 0) {
    echo "This is zero";
}

echo PHP_EOL;

switch ($var) {
    case 0:
        echo "Zero case";
        break;
    default:
        echo "Undefined";
}