<?php

if (!empty($_POST)) {
    // Add validation !
    $title = $_POST['file_title'];
    $content = $_POST['file_content'];
    $path = $_POST['file_path'];
//     This is not a file.
//    if (!is_file($path)) {
//        die(sprintf('File %s does not exist', $path));
//    }

    // It is not writable
//    if (!is_writable($path)) {
//        die(sprintf('File %s is not writable'));
//    }

    // Change content
    file_put_contents($path, $content);

//     Get new file path
    $filename = basename($path);
    if ($filename !== $title) {
        $pathWithoutFile = str_replace($filename, '', $path);
        $newPath = $pathWithoutFile.DIRECTORY_SEPARATOR.$title;

        rename($path, $newPath);
    }

}
?>

<html>
<head>
    <title>Изменения приняты</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form action="./fileChanger.php" method="post">
    <div style="margin: 100px 100px" >
        <p style="font-size: 30px">Зміни прийняті</p>
    </div>


</form>
</div>
</body>
</html>
