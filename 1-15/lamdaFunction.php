<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
            'releaseYear' => '1999'
        ],
        [
            'title' => 'live like a monk',
            'author' => 'xyz',
            'releaseYear' => '2000'
        ],
        [
            'title' => 'Beutiful diaries',
            'author' => 'xyz',
            'releaseYear' => '2001'
        ],
        [
            'title' => 'day is here',
            'author' => 'abc',
            'releaseYear' => '2003'
        ]
    ];

    // function reqAuthor($items, $fn)
    // {
    //     $reqAuthorArray = array();
    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             array_push($reqAuthorArray, $item['title']);
    //         }
    //     }
    //     return $reqAuthorArray;
    // }
    
    // $reqAuthorArray = reqAuthor($BookInfo, function ($book) {
    //     return $book['releaseYear'] > 2000;
    // })
    

    // By using of inbuild function of php
    // function reqAuthor($items, $fn)
    // {
    //     $reqAuthorArray = array();
    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             array_push($reqAuthorArray, $item['title']);
    //         }
    //     }
    //     return $reqAuthorArray;
    // }
    
    $reqAuthorArray = array_filter($BookInfo, function ($book) {
        return $book['releaseYear'] > 2000;
    });
    foreach ($reqAuthorArray as $book):
        ?>

        <p>
            <?= $book['title'] ?>
        </p>

    <?php endforeach ?>
</body>

</html>