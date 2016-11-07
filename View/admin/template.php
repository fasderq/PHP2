<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php foreach ($news() as $article) :?>
<?php echo $article->header; ?>
<br>
<br>

<?php echo $article->text; ?>
    <br>
    <br>

    <br>
    <br>
<?php endforeach;?>
</body>
</html>