<!-- Passare come parametri GET name, mail e age.
Verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php
    // Creo le variabili per salvare i parametri GET che mi servono
    $userName = $_GET['name'];
    $userMail = $_GET['mail'];
    $userAge = $_GET['age'];

    // SE name è più lungo di 3 caratteri && mail contiene un punto e una chiocciola && age è un numero
    // ALLORA stampo "Accesso riuscito"
    // ALTRIMENTI stampo "Accesso negato"
    if (strlen($userName) > 3 && filter_var($userMail, FILTER_VALIDATE_EMAIL) && is_numeric($userAge)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>