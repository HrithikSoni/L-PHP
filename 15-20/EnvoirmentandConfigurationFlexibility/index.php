<?php

require("Database.php");
require("functions.php");
$config = require("config.php");

$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);