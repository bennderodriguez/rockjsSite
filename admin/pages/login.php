<?php


$errorMSG = "";
// EMAIL
if (empty($_POST["email"]) || empty($_POST["pass"])) {
    echo $errorMSG .= "Datos Erroneos";
} else {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    ValidaDatos($email, $pass);
}

function ValidaDatos($email, $pass) {
    include '../php/conexion.php';
   /* $servername = "localhost";
    $username = "root";
    $password = "zebralimon10";
    $dbname = "rockjsrass";

    //$usuario ="root";
    //$pass = "1234";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }*/

    $sql = "SELECT a.id_user, a.usuario, a.type, a.nombre, a.active, o.nombre, o.logo FROM admin as a, organizacion as o "
            . "where usuario = '" . $email . "' AND clave = md5('" . $pass . "')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id_user"]. " - Name: " . $row["nombre"]. " " . $row["usuario"]. " " . $row["admin"]. "<br>";
            if ($row["active"] == "yes") {
                // Start the session
                session_start();
                // Set session variables
                $_SESSION["logo"] = $row["logo"];
                $_SESSION["id_user"] = $row["id_user"];
                $_SESSION["usuario"] = $row["usuario"];
                $_SESSION["type"] = $row["type"];
                $_SESSION["name"] = $row["nombre"];
                $_SESSION['loggedin'] = true;
                $_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
                echo "success";
            }else
                {
                echo "Tus credenciales estan suspendidas ¯\(シ)/¯";
                }
        }
    } else {
        echo "Something went wrong ¯\(シ)/¯";
    }
    $conn->close();
}

?>