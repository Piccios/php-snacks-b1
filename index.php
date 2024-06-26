<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->



<?php

$games = [
    [
        'HomeTeam' => 'Nuovo Basket Altopascio',
        'AwayTeam' => 'Lucchese Basket',
        'HomeScore' => '80',
        'AwayScore' => '50'
    ],
    [
        'HomeTeam' => 'Pisa Basket',
        'AwayTeam' => 'Lucchese Basket',
        'HomeScore' => '20',
        'AwayScore' => '120'
    ],
    [
        'HomeTeam' => 'Genovese',
        'AwayTeam' => 'Prato Basket',
        'HomeScore' => '90',
        'AwayScore' => '95'
    ],
    [
        'HomeTeam' => 'Cagliari',
        'AwayTeam' => 'Firenze',
        'HomeScore' => '120',
        'AwayScore' => '120'
    ],

    ];

foreach ($games as $game) {
    echo $game["HomeTeam"] . " - " . $game["AwayTeam"] . " | " . $game["HomeScore"] . "-" . $game["AwayScore"] . "<br>";

}
?>
