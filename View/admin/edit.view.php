<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form action="/admin.php?ctrl=Adminpanel&act=edit" method="post">
        <p> ID</p>
        <input type="text" name="id" value="<?php if(isset($news->id)){
            echo $news->id; } else {
            echo '';
        }
         ?>">
        <br>
        <p> Заголовок новости </p>
        <input type="text" name="header" value="<?php if(isset($news->header)){
            echo $news->header;
        } else {
            echo '';
        } ; ?>">
        <br>
        <p> Текст новости </p>
        <textarea name="text"><?php if(isset($news->text)){
                echo $news->text;
            } else {
                echo '';
            } ; ?></textarea>
        <br>
        <p> Автор новости </p>
        <input type="text" name="author_id" value="<?php if(isset($news->author_id)){
            echo $news->author_id;
        } else {
            echo '';
        }; ?>">
        <br>
        <br>
        <button type="submit"> Сохранить </button>
    </form>
</div>

<br>

<div>
    <a href="/admin.php"> Назад </a>
</div>
<br>
<br>
<br>
</body>
</html>