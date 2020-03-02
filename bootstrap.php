<?php
require_once "Connection.php";
require_once "PostData.php";
require_once "UserData.php";
$config=require_once "config.php";
$dataPost = new PostData(Connection::make($config));
$dataUser = new UserData(Connection::make($config));