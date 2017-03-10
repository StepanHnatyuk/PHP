<?php

// Cycles
$var = [1, 2, 3, 4];

// Foreach
foreach ($var as $key => $value) {
    echo "$key => $value".PHP_EOL;
}

// For
for ($i = 0; $i < count($var); $i++) {
    if (isset($var[$i])) {
        echo "$i => {$var[$i]}".PHP_EOL;
    }
}
