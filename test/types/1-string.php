<?php

// String single quotes
$string1 = 'string';

// String double quotes
$string2 = "string $string1";
$string3 = "string ${string1}s";
$string4 = "string {$string1}s";


// String Heredoc
$stringH = <<<EOT
Here some multi line
text goes
EOT;

$stringH = <<<EOT
Here ${string1} some multi line
text goes
EOT;

// String Nowdoc
$stringN = <<<'EOT'
Here ${string1} some multi line
text goes
EOT;
