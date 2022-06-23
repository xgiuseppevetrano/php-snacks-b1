<!-- Stampare ogni data con i relativi post -->

<?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
    </head>
    <body>
        <h1>Facebook post</h1>
        <?php foreach ($posts as $key => $post) { ?>
            <h2><?= $key ?></h2>
            <ul>
                <?php foreach ($post as $postInfo) { ?>
                        <li>
                            <h4><?= $postInfo['title'] ?></h4>
                            <h5>Autore: <?= $postInfo['author'] ?></h5>
                            <p><?= $postInfo['text'] ?></p>
                        </li>
                <?php } ?>
            </ul>
        <?php } ?> 
    </body>
</html>