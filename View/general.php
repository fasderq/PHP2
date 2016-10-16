<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<div>

    <?php foreach ($lastnews as $value): ?>

         <a href="/PHP2/Controller/article.php?id=<?php echo $value->id ?>">

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

<a href="/PHP2/Controller/admin.php"> Админ панель</a>


</body>
</html>