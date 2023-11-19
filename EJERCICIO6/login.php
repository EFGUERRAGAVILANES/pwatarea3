<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT id, nombre, contrasena FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            echo "Inicio de sesión exitoso. Bienvenido, " . $row['nombre'];
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

$conn->close();
?>
