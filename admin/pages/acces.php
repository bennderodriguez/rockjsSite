<?php
include '../php/conexion.php';

$sql = "SELECT * FROM admin where usuario = 'root' AND clave = md5('1234')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_user"]. " - Name: " . $row["nombre"]. " " . $row["usuario"]. " " . $row["admin"]. "<br>";
		// Start the session
		session_start();
		// Set session variables
		$_SESSION["usuario"] = $row["usuario"];
		$_SESSION["type"] = $row["admin"];
		$_SESSION['loggedin'] = true;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
		//header('Location: panel.php');
		echo "Session variables are set.";
    }
} else {
    echo "0 results";
}
$conn->close();
?>