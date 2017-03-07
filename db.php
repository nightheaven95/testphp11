<?php

defined("MY_BLOG") or die('Access denied!');

function get_db() {
	$config = require("config.php");
	$dbHandler = null; //тут создание соединения с БД
	return $dbHandler;
}

function get_posts() {
	$db = get_db();
	return [
		["id" => 1, "title" => "Пост номер 1", "likes" => 0, "created_at" => date("Y-m-d H:i:s")],
		["id" => 2, "title" => "Пост номер 2", "likes" => 5, "created_at" => date("Y-m-d H:i:s")],
		["id" => 3, "title" => "Пост номер 3", "likes" => 11, "created_at" => date("Y-m-d H:i:s")],
		["id" => 4, "title" => "Пост номер 4", "likes" => 2, "created_at" => date("Y-m-d H:i:s")],
		["id" => 5, "title" => "Пост номер 5", "likes" => 1, "created_at" => date("Y-m-d H:i:s")],
	];
}

function get_post_by_id($id) {
	$db = get_db();
	return ["id" => 1, "title" => "Пост номер 42", "text" => "Lorem ipsum dolor sit amet, \nconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \nExcepteur sint occaecat cupidatat non proident, \nsunt in culpa qui officia deserunt mollit anim id est laborum.\n", "likes" => 0, "created_at" => date("Y-m-d H:i:s")];
}

function save_post($title, $text) {
	$db = get_db();
	return true;
}

function add_like_to_post($post_id) {
	$db = get_db();
	return true;
}