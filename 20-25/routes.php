<?php

return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes/index.php',
    '/note' => 'controllers/notes/show.php',
    '/notes/create' => 'controllers/notes/create.php',
    '/contact' => 'controllers/contact.php',
];

// while having traditional naming conventions we have to create a notes folder and move all notes
// related things to that folder and also name their file on naming conventions like
// to show all : index
// to show one : show
// to create: create


// php -S localhost:8080 -t 20-25/public
// php -S localhost:8080