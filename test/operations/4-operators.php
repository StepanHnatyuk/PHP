<?php

// If .. else
$var = 1;

if ($var === 1) {
    echo "One";
} else {
    echo "Undefined";
}

// Ternary operator - short if else
echo $var === 1 ? "One" : "Undefined";

// Switch
switch ($var) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    default:
        echo "Undefined";
}