<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes')->get();

// require view("notes/index.view.php");
view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);