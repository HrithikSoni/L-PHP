<!-- <?php
class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        echo $this->name . ' is breathing';
    }
}

$person = new Person();

$person->name = "Boss";
$person->age = 25;

$person->breathe();

?> -->


<?php
// Connect to our mysql database
require('./functions.php');

// dsn is data string name
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * FROM posts");
$statement->execute();

// FETCH_ASOC gives results as associative array rather than indexed
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}