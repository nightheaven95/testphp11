<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Мой блог</title>

</head>
<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<form class="form-horizontal">
    <div class="control-group">

<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.02.2017
 * Time: 15:33
 */
function get_posts(){

    /**
    тело функции
     */
    return array();
}

;
function get_post_by_id($id)
{};


echo "Hello World! This is first stap to me majesty";


;

/** создание текстовых полей и кнопки
 * эти строки нужно ввожить вне скрипта php
 * <p>  </p> новая строка
 * текстовые поля:
* Логин:  <input name="login" type="text">
*Пароль: <input name="pass" type="text">
 * Синтаксис определения текстовой области следующий:

<textarea name="имя_переменной" rows="N" cols="N" value=""></textarea>
Определение текстового поля включает три основных атрибута:
name - имя переменной, в которой сохраняются введённые данные;
rows - количество строк в текстовой области;
cols - количество столбцов (букв) в текстовой области.
 * Кнопка:
*<input name="go" type="submit" value="Войти">
 * Кнопка Bootstrap
 * <button type="button" class="btn btn-success">Button</button>
 *
 *  onclick="location.href='адрес куда пересылать при нажатии на кнопку'
'<p><a href="posts.php?post=' .$query['id']. '">Читать далее</a></p>'
*/

include_once("config.php");
?>

<p>Имя поста <input name="TITLE" type="text"></p>
<p>Текст поста <textarea name="TEXT" rows="N" cols="N" value=""> </textarea></p>
<p><input name="go" type="submit" value="Создать новый пост"></p>

<button type="button" class="btn btn-success" onclick="location.href='add_post.php' ;">Создать новый пост</button>

    </div>
</form>