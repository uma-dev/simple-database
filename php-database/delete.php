<?php
$servername = "localhost";
$username = "root";
$password = "*myCOOLD4t4b4s3*";
$dbname = "rapapp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];
//$id = $_REQUEST["id"];

$sql = "DELETE FROM Usuarios WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Se ha borrado el registro con ID:" . $id;
} else {
    echo "Error al borrar de la base de datos: " . $conn->error;
}

$conn->close();
header('Location:../index.php'); 
?>

