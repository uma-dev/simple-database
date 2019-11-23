<?php
$servername = "localhost";
$username = "root";
$password = "*myCOOLD4t4b4s3*";
$dbname = "rapapp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre  = $_POST["nombre"];
$email   = $_POST["email"];
$zipcode = $_POST["zipcode"];
$celular = $_POST["celular"];
//$id = $_REQUEST["id"];

//$sql = "INSERT FROM Usuarios WHERE id = $id";
$sql = "INSERT INTO Usuarios (Nombre, email, celular, `zip code`) VALUES ( '$nombre', '$email', '$celular', '$zipcode' )";

if ($conn->query($sql) === TRUE) {
    echo "Se ha registrado el usuario :" . $nombre;
} else {
    echo "Error al insertar nuevo usuario: " . $conn->error;
}

$conn->close();
header('Location:../index.php'); 
?>