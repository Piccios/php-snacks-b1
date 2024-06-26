<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l ’ array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Che bella giornata!'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => "Ma che schifo e' il caffe' da Starbuks!"
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => "Qualcuno ha visto il nuovo capitolo di Dune?"
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => "Finalmente le ferie!!!"
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Che aspetto ha Marcelus Wallace??'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => "Ezechiele 25:17 - Il cammino dell' uomo timorato.."
        ]
    ],
];



foreach ($posts as $key => $post) {
    echo "<h1>" . $key . "</h1>";
    foreach ($post as $post) {
        echo "<h2>" . $post['title'] . "</h2>";
        echo "<p>" . $post['author'] . "</p>";
        echo "<p>" . $post['text'] . "</p>";
    }
}
?>



