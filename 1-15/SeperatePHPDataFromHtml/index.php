<!-- For index.php -->

<?php

$BookInfo = [
    [
        'title' => 'Atomic Habit',
        'author' => 'xyz',
        'releaseYear' => '1990'
    ],
    [
        'title' => 'Subtle Art of Not giving fuck',
        'author' => 'abc',
        'releaseYear' => '1990'
    ],
    [
        'title' => 'live like a monk',
        'author' => 'xyz',
        'releaseYear' => '1990'
    ],
    [
        'title' => 'Beutiful diaries',
        'author' => 'xyz',
        'releaseYear' => '1990'
    ],
    [
        'title' => 'day is here',
        'author' => 'abc',
        'releaseYear' => '1990'
    ]
];

function reqAuthor($BookInfo, $author)
{
    $reqAuthorArray = array();
    foreach ($BookInfo as $Book) {
        if ($Book['author'] === $author) {
            array_push($reqAuthorArray, $Book['title']);
        }
    }
    return $reqAuthorArray;
}
$reqAuthorArray = reqAuthor($BookInfo, 'xyz');
require "index.view.php";