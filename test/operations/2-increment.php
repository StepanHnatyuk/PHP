<?php

// pre-increment
$var = 5;
print(++$var); // increments first, then passes value (now 6) to print()

echo PHP_EOL;

// post-increment
$var = 5;
print($var++); // passes value (still 5) to print(), then increments

echo PHP_EOL;

print($var);