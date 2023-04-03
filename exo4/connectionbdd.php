<?php
$PDO_host = "localhost";
$PDO_database = "cour";
$PDO_user = "root";
$PDO_password = "";

try {
    $bdd = new PDO("mysql:host=$PDO_host;dbname=$PDO_database", $PDO_user, $PDO_password);
    //On définit le mode d'erreur de PDO sur Exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}