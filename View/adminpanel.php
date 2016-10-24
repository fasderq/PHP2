<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактор</title>
    <link href="/Css/style.css" type="text/css" rel="stylesheet">

</head>
<body>
<div id="panel">
<a href="/"> На главную</a>
<table>
    <tr>
        <td>
            <div class="left">
                <form action="/save.php" method="post">

                    <label class="textarea">
                        <div><input type="text"  name="header" value="<?php

                            if (isset($edit->header))
                            {
                                echo $edit->header;

                            } else {
                                echo '';
                            }

                            ?>"></div>

                        <div><textarea rows="31" name="text"><?php

                                if (isset($edit->text))
                                {
                                    echo $edit->text;

                                } else {
                                    echo '';
                                }

                                ?></textarea></div>

                        <div>
                            <?php   if (isset($edit->id)): ?>
                            <button type="submit" name="id" value="<?php echo $edit->id; ?>">Сохранить</button>
                            <?php else: ?>
                            <button type="submit" name="id">Опубликовать</button>
                            <?php endif; ?>
                        </div>
                    </label>
                </form>
            </div>
        </td>

        <td>
            <div class="news">
                <!--Здесь должны быть новости для редактирования-->
                <?php

                foreach ($news as $value) :
                    ?>

                    <form action="/edit.php" method="post">

                        <?php echo $value->header; ?>

                        <br>
                        <br>

                        <?php echo $value->text; ?>

                        <br>
                        <br>

                        <?php if(isset($value->author->name)) {

                            echo $value->author->name;

                        } else {

                            echo 'Автор неизвестен';

                        } ?>

                        <br>
                        <br>

                        <button type="submit" name="edit" value="<?php echo $value->id; ?>">Редактировать</button>
                        <button type="submit" name="delete" value="<?php echo $value->id; ?>">Удалить</button>

                    </form>
                    <br>
                    <br>
                    <br>
                    <?php

                endforeach;

                ?>
            </div>
        </td>
    </tr>

</table>
</div>
</body>
</html>
