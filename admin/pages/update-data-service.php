<?php

include 'session.php';
include '../php/conexion.php';
$errorMSG = "";
$errorSQL = "";
$last_update_at = date('Y-m-d') . ' ' . date("h:i:sa");

//error_reporting(0);
// id
if (empty($_POST["id"])) {
    $errorMSG = "Pk is required ";
} else {
    $id = $_POST["id"];
}
// name_conf
if (empty($_POST["name_conf"])) {
    $errorMSG = "name_conf is required ";
} else {
    $name_conf = $_POST["name_conf"];
}
// name_conf
if (empty($_POST["urli"])) {
    $errorMSG = "url is required ";
} else {
    $url = $_POST["urli"];
}
// dlc
if (empty($_POST["DLC"])) {
    $errorMSG = "dlc is required ";
} else {
    $dlc = $_POST["DLC"];
}
// pathprog
if (empty($_POST["PATHPROG"])) {
    $errorMSG = "pathprog is required ";
} else {
    $pathprog = $_POST["PATHPROG"];
}
// pf_name
if (empty($_POST["PROCGI"])) {
    $errorMSG = "pf_name is required ";
} else {
    $parameter_file = $_POST["PROCGI"];
}
// notes
if (empty($_POST["param"])) {
    $errorMSG = "notes is required ";
} else {
    $notes = $_POST["param"];
}
// db
if (empty($_POST["BD"])) {
    $errorMSG = "db is required ";
} else {
    $db = $_POST["BD"];
}
// lg
if (empty($_POST["LOG"])) {
    $errorMSG = "LOG is required ";
} else {
    $lg = $_POST["LOG"];
}

/*Verificamos que las variables _POST esten completas*/
if ($errorMSG == "" && $type=="admin") {
/*Ejecutamos QUERY*/    
    $sql = "UPDATE database_config SET "
            . "name_conf = '$name_conf', "
            . "url = '$url', "
            . "active = 'false', "
            . "dlc = '$dlc', "
            . "pathprog= '$pathprog', "
            . "parameter_file='$parameter_file', "
            . "last_update_at='$last_update_at', "
            . "notes ='$notes', "
            . "db ='$db', "
            . "lg ='$lg' "
            . "WHERE id = $id";
/*Validamos si hubo un error en la ejecucion de la QUERY*/    
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
} else {
    if ($errorMSG == "") {
        echo " Acción prohibida. Permisos insufucientes";
    } else {
        echo $errorMSG;
    }
}

?>