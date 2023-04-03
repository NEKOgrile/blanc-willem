<?php

include("connectionbdd.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];


    $mail = $bdd->prepare('SELECT * FROM ajax WHERE email = ?');
    $mail->execute([$email]);
    $mailexist = $mail->rowCount();

    if ($mailexist != 0) {
        $reponseexiste = array("nom" => $name, "email" => $email, "erreur" => "l email existe deja");
        echo ($json = json_encode($reponseexiste));
    } else {
        $registernewpp = $bdd->prepare(
            'INSERT INTO ajax (nom , email) VALUE (?,?)'
        );
        $registernewpp->execute(array($name, $email));
        echo json_encode("ok");
    }

}
?>