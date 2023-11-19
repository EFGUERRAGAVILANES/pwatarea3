<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
