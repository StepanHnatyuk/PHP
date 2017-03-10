<?php

// Приведения типов

// String to int
$var = 'text';
$var1 = (int) $var; // 0
$var2 = intval($var); // 0

// Int to string
$var = 1;
$var1 = (string) $var; // '1'

// Array to string
$var = [1, 2];
$var1 = (string) $var; // Notice: Array to string conversion

// String to array
$var = 'text';
$var1 = (array) $var; // Array with one element

var_dump($var1);

$var = [1, 3];
$var1 = (int) $var; // 1

var_dump($var1);
