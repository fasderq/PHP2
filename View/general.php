<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<div>

    <?php foreach ($lastnews as $value): ?>

         <a href="/article.php?id=<?php echo $value->id ?>">

        <?php echo $value->header; ?></a>

        <br>
        <br>

        <?php echo $value->text; ?>

        <br>
        <br>

    <?php endforeach; ?>

</div>

<br>
<br>

<a href="/admin.php"> Админ панель</a>


</body>
</html>