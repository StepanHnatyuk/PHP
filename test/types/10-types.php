<?php

// Get type
$var = "String";

echo gettype($var);

echo PHP_EOL;

// Is type
$isString = is_string($var);  // true
$isInteger = is_integer($var);
$isFloat = is_float($var);
$isBool = is_bool($var);
$isNull = is_null($var);
$isArray = is_array($var);

$isObject = is_object($var);
$isClosure = is_callable($var);
$isResource = is_resource($var);