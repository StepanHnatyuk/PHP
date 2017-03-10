<?php

// Callable/Closure
$echoMe = function ($string) {
    echo $string;
};

$echoMe("Hi");

var_dump($echoMe);