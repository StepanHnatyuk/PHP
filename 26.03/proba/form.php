<html>
<head>
    <title>Форма</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container" style="...">
    <br>
    <br>
    <br>
    <form action="" method="post" name="contact-form">
        <div class="form-group">
            <label for="username">Имя</label>
            <input type="text" name="username" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="comment">Комментарий</label>
            <textarea name="comment" id="comment" class="form-control"></textarea>
        </div>
<!--                    <input type="hidden" name="token" value="" />-->
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <div class="container">
        <?php
        include __DIR__ . '/comments-view.php';
        ?>
    </div>
</div>
</div>
</body>
</html>