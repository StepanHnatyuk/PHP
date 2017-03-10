<?php

// Resource
$handle = fopen(__DIR__.'/file.txt', 'r');

var_dump($handle);

// Use resource
$file = fread($handle, 1024);

echo $file;