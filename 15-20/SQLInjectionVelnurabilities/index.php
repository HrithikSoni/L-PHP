<?php

require("Database.php");
require("functions.php");
$config = require("config.php");

$db = new Database($config['database']);

// $id = $_GET['id'];
// $query = "select * from posts where id = {$id}";
// $posts = $db->query($query)->fetchAll();

$id = $_GET['id'];
$query = "select * from posts where id = :id";
$posts = $db->query($query, [$id])->fetchAll();


dd($posts);