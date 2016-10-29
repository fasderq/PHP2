<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<div>

    <?php foreach ($news as $article): ?>

         <a href="/news/one/?id=<?php echo $article->id; ?>">

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

<a href="/adminpanel/allnews"> Админ панель</a>


</body>
</html>