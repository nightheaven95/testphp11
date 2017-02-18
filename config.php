<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.02.2017
 * Time: 15:35
 */

$db = mysqli_connect("localhost","admin", "admin");//подключение с указанием сервира и логина пароля
mysqli_select_db("posts",$db); //указание базы данных
