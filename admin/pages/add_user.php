<?php 
include 'session.php'; 
include '../php/conexion.php';
$errorMSG = "";
$errorSQL = "";
//error_reporting(0);

// name
if (empty($_POST["name"])) {
    $errorMSG = "name is required ";
} else {
      $nom = $_POST["name"];
}

// nick
if (empty($_POST["nick"])) {
    $errorMSG = "nick is required ";
} else {
     $nick = $_POST["nick"];
}


// email
if (empty($_POST["email"])) {
    $errorMSG .= "email is required ";
} else {
    $e_mail = $_POST["email"];
}

// password
if (empty($_POST["password"])) {
    $errorMSG .= "password is required ";
} else {
     $clave = $_POST["password"];
}

// admin
if (empty($_POST["type"])) {
    $errorMSG .= "admin is required ";
} else {
    $tipo = $_POST["type"];
}

// active
if (empty($_POST["active"])) {
    $errorMSG .= "active is required ";
} else {
     $active = $_POST["active"];
}


/*Verificamos que las variables _POST esten completas*/
if ($errorMSG == "" && $type=="admin") {
/*Ejecutamos QUERY*/    
    
$sql = "INSERT INTO admin (nombre, usuario, email, clave, type, active)
		   VALUES ('$nom', '$nick', '$e_mail', md5('$clave'), '$tipo','$active')";
/*Validamos si hubo un error en la ejecucion de la QUERY*/    
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error updating record: " . $conn->error;
        if ($errorSQL == 1062) {echo ': Nick name is in use, select another';}
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