<?php

    include __DIR__ . '/animals.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-8</title>

</head>
<body>
    <header>
        <h1>Animals</h1>
    </header>
    <main>
        <ul>
            <h2>Mammals:</h2>
            <?php foreach ($mammals as $mammal) { ?>
                <li>
                <?php echo $mammal;} ?>
                </li>
                <h2>Fishes:</h2>
                <?php foreach ($fishes as $fish) { ?>
                <li>
                    <?php echo $fish;} ?>
                </li>
                <h2>Reptiles:</h2>
                <?php foreach ($reptiles as $reptile) { ?>
                <li>
                    <?php echo $reptile;} ?>
                </li>
                <h2>Other types:</h2>
                    <?php foreach ($otherTypes as $otherType) { ?>
                <li>
                    <?php echo $otherType;} ?>
                </li>
        </ul>
    </main>
    
</body>
</html>