<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<div>

    <?php foreach ($lastnews as $article): ?>

         <a href="/article.php?id=<?php echo $article->id ?>">

        <?php echo $article->header; ?></a>

        <br>
        <br>

        <?php echo $article->text; ?>

        <br>
        <br>

        <?php if(isset($article->author->name)) {

            echo $article->author->name;

        } else {

            echo 'Автор неизвестен';

        } ?>

        <br>
        <br>

    <?php endforeach; ?>

</div>

<br>
<br>

<a href="/admin.php"> Админ панель</a>


</body>
</html>