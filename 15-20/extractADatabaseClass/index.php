<?php

require("Database.php");

$db = new Database();
$posts = $db->query("select * FROM posts");


foreach ($posts as $post):
    ?>

    <ul>
        <li>
            <?= $post['title'] ?>
        </li>
    </ul>

<?php endforeach ?>