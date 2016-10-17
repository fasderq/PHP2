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
                <form action="/Controller/save.php" method="post">

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
                            <button type="submit" name="id" value="<?php

                            if (isset($edit->id))
                            {
                                echo $edit->id;
                            } else {
                                echo '';
                            }

                            ?>">Опубликовать</button>
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

                    <form action="/Controller/edit.php" method="post">

                        <?php echo $value->header; ?>

                        <br>
                        <br>

                        <?php echo $value->text; ?>

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
