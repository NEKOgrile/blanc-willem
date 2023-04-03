<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if (isset($_POST)) {
    var_dump($_POST);
    print_r($_POST);
}
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Nom: $name<br>";
    echo "Email: $email<br>";

    echo "je sais pas";
}
?>