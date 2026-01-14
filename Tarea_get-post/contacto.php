<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>

<h1>Formulario de Contacto</h1>

<form method="POST" action="contacto.php">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="correo"><br><br>

    <input type="submit" value="Enviar">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    echo "<h2>Datos enviados:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
}
?>

<br>
<a href="index.php">Volver al inicio</a>

</body>
</html>
