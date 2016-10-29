<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $article->header; ?></title>
</head>

<body>

<div>
<article>
    <h1><?php echo $article->header; ?></h1>
    <div><?php echo $article->text; ?></div>
    <p>   <?php

        if(isset($article->author->name))
        {
            echo $article->author->name;
        }
        else
            {

            echo 'Автор неизвестен';

        } ?></p>

</article>
</div>

<div>
    <a href="/">На главную</a>
</div>

</body>

</html>