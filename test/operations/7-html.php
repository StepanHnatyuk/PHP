<?php

// Show html
$var = 'test';

if ($var === 'test') {
?>
    <p>Some text goes here</p>
<?php
}

?>

<?php if ($var === 'test'): ?>
    <p>Some text goes here</p>
<?php endif; ?>
