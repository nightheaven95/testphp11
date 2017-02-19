
<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" type="text/javascript"></script>

<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.02.2017
 * Time: 15:33
 */

echo "Hello World! This is first stap to me majesty";


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
*/


?>

<p>Имя поста <input name="TITLE" type="text"></p>
<p>Текст поста <textarea name="TEXT" rows="N" cols="N" value=""></textarea></p>
<p><input name="go" type="submit" value="Создать новый пост"></p>

<button type="button" class="btn btn-success" >Создать новый пост</button>

