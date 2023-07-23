<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

// we are making our own apis and functions instead of using inbuilt one's
// $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();
// if (!$note) {
//     abort();
// }

authorize($note['user_id'] === Response::currentUser);

// if ($note['user_id'] != Response::currentUser) {
//     abort(Response::FORBIDDEN);
// }
// ;

require "views/note.view.php";