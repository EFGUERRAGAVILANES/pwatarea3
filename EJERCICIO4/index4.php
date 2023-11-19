<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Guerra Erick</title>
    <link rel="stylesheet" href="styles4.css">
</head>
<body>
    <div class="container">
        <h1>Juego de Adivinanzas</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $respuesta_correcta = $_POST["respuesta_correcta"];
                $intento_usuario = $_POST["intento_usuario"];

                if ($intento_usuario == $respuesta_correcta) {
                    echo "<p class='success'>¡Correcto! Has adivinado el número.</p>";
                } else {
                    echo "<p class='error'>Incorrecto. Inténtalo de nuevo.</p>";
                }
            }

            $respuesta_correcta = rand(1, 10);
        ?>

        <p>Adivina el número entre 1 y 10:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="hidden" name="respuesta_correcta" value="<?php echo $respuesta_correcta; ?>">
            <input type="number" name="intento_usuario" required>
            <button type="submit">Adivinar</button>
        </form>
    </div>
</body>
</html>
