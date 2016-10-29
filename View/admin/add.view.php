<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form action="/Adminpanel/add" method="post">
        <p> Заголовок новости </p>
        <input type="text" name="header">
        <br>
        <p> Текст новости </p>
        <textarea name="text"></textarea>
        <br>
        <p> Автор новости </p>
        <input type="text" name="author_id">
        <br>
        <br>
        <button type="submit"> Добавить запись </button>
    </form>
</div>

<br>

<div>
    <a href="/adminpanel/allnews"> Назад </a>
</div>
<br>
<br>
<br>
</body>
</html>