<?php

// Simple array
// $simple = array(0, 1, 2);
$simple = [0, 1, 2];

var_dump($simple);

// Assoc array
$assoc = [
    'one' => 1,
    'two' => 2
];

var_dump($assoc);

// Multi dimensional
$multi = [
    'one' => [
        'two' => $simple,
    ],
    1,
];

var_dump($multi);