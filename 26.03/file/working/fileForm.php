<?php
//if (isset($_GET['file'])){
//    die ("No file has been specified");
//}

$fileName=trim(strip_tags($_GET['file']));
$path=__DIR__.DIRECTORY_SEPARATOR.'./'.DIRECTORY_SEPARATOR.$fileName;
//if (!is_file($path)) {
//    die(sprintf('This path %s is not a file', $path));
//}
$fileContent=file_get_contents($path);                                        // ('./5/6.txt');
//?>



<html>
<head>
    <title>Форма изменения файла</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:30px">
    <h2>Изменить файл <?php echo $fileName; ?></h2>
    <form action="./fileChanger.php" method="post">
        <div class="form-group">
            <label for="file_title">Имя фала</label>
            <input type="text"
                   name="file_title"
                   id="file_title"
                   class="form-control"
                   value="<?php echo $fileName; ?>"
            />
        </div>
        <div class="form-group">
            <label for="file_content">Контент файла</label>
            <textarea
                name="file_content"
                id="file_content"
                class="form-control"
            ><?php echo $fileContent; ?></textarea>
        </div>
        <input type="hidden" name="file_path" value="<?php echo $path; ?>">
        <button type="submit" class="btn btn-primary">Изменить файл</button>

    </form>
</div>
</body>
</html>