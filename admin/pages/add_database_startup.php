<?php

include 'session.php';
include '../php/conexion.php';
$errorMSG = "";
$errorSQL = "";
//error_reporting(0);
// db_name
if (empty($_POST["db_name"])) {
    $errorMSG = "db_name is required ";
} else {
    $db_name = $_POST["db_name"];
}
// db_path
if (empty($_POST["db_path"])) {
    $errorMSG = "db_path is required ";
} else {
    $db_path = $_POST["db_path"];
}
// db_port
if (empty($_POST["db_port"])) {
    $errorMSG = "db_port is required ";
} else {
    $db_port = $_POST["db_port"];
}
// pf_name
if (empty($_POST["pf_name"])) {
    $errorMSG = "pf_name is required ";
} else {
    $pf_name = $_POST["pf_name"];
}
// progress_path
if (empty($_POST["progress_path"])) {
    $errorMSG = "progress_path is required ";
} else {
    $progress_path = $_POST["progress_path"];
}
// wrk_path
if (empty($_POST["wrk_path"])) {
    $errorMSG = "wrk_path is required ";
} else {
    $wrk_path = $_POST["wrk_path"];
}
// other_argument
if (empty($_POST["other_argument"])) {
    $errorMSG = "other_argument is required ";
} else {
    $other_argument = $_POST["other_argument"];
}



$sql = "INSERT INTO database_startup (db_name, db_path, db_port, pf_name, progress_path, wrk_path, other_argument, user_id)
                              VALUES ('$db_name', '$db_path', '$db_port', '$pf_name','$progress_path', '$wrk_path', '$other_argument', '$id_user')";

if ($errorMSG == "" && $conn->query($sql) === TRUE) {
    echo "success";
} else {
    if ($errorMSG == "") {
        echo "Something went wrong";
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . $conn->errno;
       /* $errorSQL .= $conn->errno;
        //echo $errorSQL;
        if ($errorSQL == 1062) {
            echo ': Project display name is in use';
        }*/
    } else {
        echo $errorMSG;
    }
}

$conn->close();
?>