<?php
$content = file_get_contents(__DIR__ . '/comment.txt');
$comments = explode("|", $content);

?>

<h2>Комментарии</h2>

<?php foreach ($comments as $comment): ?>
    <?php
    if ($comment === '') {
        continue;
    }
    list($name, $text) = explode(':', $comment);
    ?>


    <div class="container">
        <hr/>
        <p><?php echo $name; ?></p>
        <p><?php echo $text; ?></p>
    </div>
<?php endforeach; ?>
