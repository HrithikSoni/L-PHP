<?php
require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body is required which is more than 1 char and less than 1000 cahr';
    }

    // if (strlen($_POST['body']) === 0) {
    //     $errors['body'] = 'A body is required';
    // }

    // if (strlen($_POST['body']) > 1000) {
    //     $errors['body'] = 'Maximum notes length allowed is only 1,000 characters';
    // }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);