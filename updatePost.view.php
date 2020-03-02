<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Добавляем пост...</h2>
    <form action="" method="post">
        <div class="form-group mt-5">
            <label for="post_date">Дата публикации:
                <?= date("d : m : Y") ?>
            </label>
        </div>
        <div class="form-group mt-5">
            <label for="title" class="mb-3">Название:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description" class="mb-3">Введите текст: </label>
            <textarea class="form-control" id="description" name="description" id="description" rows="10" cols="50" required>
            </textarea>
        </div>
        <button type="submit" name="btnInsertPost" class="btn btn-primary">
            Изменить пост</button>
    </form>
</div>
</body>
</html>