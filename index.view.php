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
<a class="col-mb-4 btn btn-primary mt-5 mb-3 p-3" href="insertPost.php">
    Добавить новую запись
    </a>
<table class ="table table-striped table-bordered table-hover col-md-12">
    <?php foreach ($posts as $row): ?>
    <tr class="d-flex">
        <td class="col-md-1"><?= $row->id ?></td>
        <td class="col-md-2"><?= $row->title ?></td>
        <td class="col-md-5"><?= nl2br($row->description)  ?></td>
        <td class="col-md-2"><?= date_format(new DateTime($row->datePublication),'d : m : y') ?></td>
<td class="col-md-2 p-4">
    <a class="btn btn-info p-2"
    href='daletePost.php?id=<?= $row->id; ?>'>
        Удалить пост</a>
</td>
        <td class="col-md-2 p-4">
            <a class="btn btn-info p-2"
               href='updatePost.php?id=<?= $row->id; ?>'>
                Изменить пост</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>
