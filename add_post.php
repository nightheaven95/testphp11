<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- подключение Bootstrap -->


<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.02.2017
 * Time: 15:34
 *
 * страница добавления поста
 */

function onDB ()
{
    /** $db = mysqli_connect("localhost","admin", "admin");//подключение с указанием сервира и логина пароля
     * mysqli_select_db("posts",$db); //указание базы данных
     */
}
?>

<p>Имя поста <input name="TITLE1" type="text"></p>
<p>Текст поста <textarea name="TEX1T" rows="N" cols="N" value=""></textarea></p>
<button type="button" class="btn btn-success" onclick=mysqli_query("INSERT INTO posts(TITLE, TEXT) VALUES('$TITLE1','$TEXT1')") >Добавить пост!!</button>
<button type="button" class="btn btn-danger" onclick="location.href='index.php';">назад</button>