<!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

include __DIR__ . '/students.php';

foreach ($students as $student){
    $media = array_sum($student['votes']) / count($student['votes']);
}



?>


<ul>
        <?php foreach ($students as $student) {
            echo "<li>" . $student['name'] . "<br>" . $student['lastname'] . "<br>" . $media . "<br>" . "</li>";
        }
        ?>
</ul>
