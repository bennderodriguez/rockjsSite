<?php 
include 'session.php'; 
include '../php/conexion.php';
$errorMSG = "";
$errorSQL = "";
error_reporting(0);



// name
if (empty($_POST["name_proyect"])) {
    $errorMSG = "name_proyect is required ";
} else {
      $name_proyect = $_POST["name_proyect"];
}

// nick
if (empty($_POST["p_name"])) {
    $errorMSG = "p_name is required ";
} else {
     $p_name = $_POST["p_name"];
}


// email
if (empty($_POST["database_configuration"])) {
    $errorMSG .= "database_configuration is required ";
} else {
    $database_configuration = $_POST["database_configuration"];
}


// notes
if (empty($_POST["notes"])) {
    $errorMSG .= "notes_configuration is required ";
} else {
    $notes = $_POST["notes"];
}



$sql = "INSERT INTO rockjs_conexion (display_name, program_name, id_conf, notes, id_user)
                             VALUES ('$name_proyect', '$p_name', '$database_configuration', '$notes','$id_user')";

if ($errorMSG == "" && $conn->query($sql) === TRUE) {
    echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong";
        //echo "Error: " . $sql . "<br>" . $conn->error . "<br>" . $conn->errno;
        $errorSQL.= $conn->errno;
        //echo $errorSQL;
        if($errorSQL == 1062){echo ': Project display name is in use';}
    } else {
        echo $errorMSG;
    }
}

$conn->close();
?>