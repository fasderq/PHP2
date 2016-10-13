<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>

<div>

    <?php foreach ($lastnews as  $text){

?> <a href="/PHP2/Controller/article.php?id=<?php echo $text->getId()?>">

      <?php echo $text->getHeader(); ?></a>

        <br>
        <br>

        <?php echo $text->getArticle(); ?>
    <br>
    <br>

    <?php
    }
    ?>

</div>



</body>
</html>