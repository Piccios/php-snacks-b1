<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->


<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Snack-6</title>
</head>
<body>
    <main>
        <div class="bg-grey">
            <?php   
            foreach($db['teachers'] as $teacher){
                    echo '<div>' . $teacher['name'] . ' ' . $teacher['lastname'] . '</div>';
                }
            ?>
        </div>
        <div class="bg-green">
            <?php 
            foreach($db['pm'] as $pm){
                echo '<div>' . $pm['name'] . ' ' . $pm['lastname'] . '</div>';
            }
            ?>
        </div>
    </main>
</body>
</html>


