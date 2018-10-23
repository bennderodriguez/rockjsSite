<?php 
include 'session.php'; 
include '../php/conexion.php';

error_reporting(0);

// name_conf
if (empty($_POST["name_conf"])) {
    $errorMSG = "name_conf is required ";
} else {
     $name_conf = $_POST["name_conf"];
}

// url service web
if (empty($_POST["url"])) {
    $errorMSG = "URL is required ";
} else {
     $url = $_POST["url"];
}

// PF
if (empty($_POST["parameter_file"])) {
    $errorMSG = "parameter_file is required ";
} else {
     $parameter_file = $_POST["parameter_file"];
}


// PATH
if (empty($_POST["pathprog"])) {
    $errorMSG .= "pathprog is required ";
} else {
    $pathprog = $_POST["pathprog"];
}

// DLC
if (empty($_POST["dlc"])) {
    $errorMSG .= "dlc is required ";
} else {
    $dlc = $_POST["dlc"];
}

// DLC
if (empty($_POST["notes"])) {
    $errorMSG .= "notes is required ";
} else {
    $notes = $_POST["notes"];
}

// db
if (empty($_POST["db"])) {
    $errorMSG .= "db is required ";
} else {
    $db = $_POST["db"];
}

// lg
if (empty($_POST["lg"])) {
    $errorMSG .= "lg is required ";
} else {
    $lg = $_POST["lg"];
}

/*Verificamos que las variables _POST esten completas*/
if ($errorMSG == "" && $type=="admin") {
/*Ejecutamos QUERY*/    
    $sql = "INSERT INTO database_config (name_conf, url, dlc, pathprog, parameter_file, id_user, notes, db, lg)
    VALUES ('$name_conf', '$url','$dlc', '$pathprog', '$parameter_file', '$id_user', '$notes', '$db', '$lg')";
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