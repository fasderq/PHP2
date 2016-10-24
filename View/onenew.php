<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php  echo $news->header; ?>

<br>
<br>

<?php  echo $news->text; ?>

<br>
<br>

<?php if(isset($news->author->name)) {

    echo $news->author->name;

} else {

    echo 'Автор неизвестен';

} ?>

<br>
<br>

<div>
    <a href="/"> Назад </a>
</div>

</body>
</html>