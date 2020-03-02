<?php
session_start();
require_once "bootstrap.php";

$title = "Просмотр информации";
$post=$dataPost->getPostsID($_GET['id']);
if(!$post){
    header("Location: / ");
    exit;
}
require_once "views/posts/showPost.view.php";