<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<div>
    <a href="/"> На главную </a>
</div>
<br>
<div>
<a href="/Adminpanel/add"> Добавить запись </a>
</div>


    <?php foreach ($news as $artile) :?>
    <h1><?php echo $artile->header; ?></h1>
        <br>
    <p><?php echo $artile->text; ?></p>
        <br>
        <p><?php echo $artile->author->name ?? 'без автора'; ?></p>
        <br>
    <a href="/adminpanel/edit/?id=<?php echo $artile->id; ?>"> Редактировать </a>
    <a href="/adminpanel/delete/?id=<?php echo $artile->id; ?>"> Удалить </a>
    <?php endforeach; ?>


<br>
<br>

</body>
</html>