<?php
session_start();
$msg="";
$_SESSION["msg"] = "Заполните поля";
$_SESSION["alert"] = "alert-warning";
require_once "views/posts/regPost.view.php";