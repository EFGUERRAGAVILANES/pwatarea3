<?php
$servername = "tu_servidor_mysql";
$username = "tu_usuario_mysql";
$password = "tu_contrasena_mysql";
$database = "nombre_de_la_base_de_datos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
