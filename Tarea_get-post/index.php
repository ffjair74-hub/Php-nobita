<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>

<h1>Sitio Web Educativo</h1>

<nav>
    <a href="index.php?seccion=Inicio">Inicio</a> |
    <a href="index.php?seccion=Unidades">Unidades</a> |
    <a href="index.php?seccion=Contacto">Contacto</a>
</nav>

<hr>

<?php
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
    echo "<h2>Sección seleccionada: $seccion</h2>";
} else {
    echo "<h2>Bienvenido al sitio web</h2>";
}
?>

<br>
<a href="contacto.php">Ir al formulario de contacto</a>

</body>
</html>
