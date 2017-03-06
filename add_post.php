<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- подключение Bootstrap -->

<form action = "/add_post.php" method="POST"class="form-horizontal">
    <div class="control-group">

<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.02.2017
 * Time: 15:34
 *
 * страница добавления поста
 */
function save_post_to_db($title, $text){
    /** текст функции */
};


if (!empty($_POST["title"]) && !empty($_POST["text"])) {

    save_post_to_db($_POST["title"], $_POST["text"]);
    header("Location: /index.php");
    exit;
};
?>


    <p>Имя поста <input name="TITLE" type="text"></p>
    <p>Текст поста <textarea name="TEXT" rows="N" cols="N" value=""></textarea></p>
<button type="button" class="btn btn-success" onclick=  >Добавить пост!!</button>
<button type="button" class="btn btn-danger" onclick="location.href='index.php';">назад</button>
    </div>
</form>
