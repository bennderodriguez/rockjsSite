<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    $id_user = $_SESSION["id_user"];
    $logo = $_SESSION["logo"];
    $usuario = $_SESSION["usuario"];
    $type = $_SESSION["type"];
    $name = $_SESSION["name"];
} else {
    header('Location: index.php');

    exit;
}

$now = time();
if ($now > $_SESSION['expire']) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>