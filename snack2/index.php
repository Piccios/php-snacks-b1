<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
if (strlen($_GET['name'])> 3 && strpos($_GET['mail'], '@' ) && strpos($_GET['mail'], "." ) && is_numeric($_GET['age'])) 
    echo "Accesso riuscito";


?>

<form action="./access.php" method="GET">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="mail">Mail</label>
    <input type="text" name="mail" id="mail">
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
</form>