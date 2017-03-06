<link rel="stylesheet" href="css/bootstrap.css">

<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- подключение Bootstrap -->

<form action = "/add_post.php" method="POST">

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


if  (!empty($_POST["title"]) && !empty($_POST["text"]))
{
     save_post_to_db($_POST["title"], $_POST["text"]);
    header('location/index.php');
    exit;

}
?>


<button type="button" class="btn btn-success" onclick= >Добавить пост!!</button>
<button type="button" class="btn btn-danger" onclick="location.href='index.php';">назад</button>
</form>
