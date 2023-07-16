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
            'author' => 'xyz'
        ],
        [
            'title' => 'Subtle Art of Not giving fuck',
            'author' => 'abc'
        ],
        [
            'title' => 'live like a monk',
            'author' => 'xyz'
        ],
        [
            'title' => 'Beutiful diaries',
            'author' => 'xyz'
        ],
        [
            'title' => 'day is here',
            'author' => 'abc'
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

    $reqAuthorArray = reqAuthor($BookInfo, 'xyz')
        ?>



    <p>
        <?php foreach ($reqAuthorArray as $book) {
            echo $book;
        } ?>
    </p>


</body>

</html>