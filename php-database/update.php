<?php
$servername = "localhost";
$username = "root";
$password = "*myCOOLD4t4b4s3*";
$dbname = "rapapp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email= $_POST['email'];
$id= $_POST['id'];



//$sql = "INSERT FROM Usuarios WHERE id = $id";
$sql = "UPDATE Usuarios SET email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Se ha actualizado el usuario " . $id;
} else {
    echo "Error al actualizar usuario: " . $conn->error;
}
$conn->close();
header('Location:../index.php'); 
?>
