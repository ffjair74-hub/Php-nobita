
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Post - Get</title>

</head>

<body>
    <h1>Ejercicio Get</h1>
    <p>Haz clic en el enlace</p>

    <!-- Enlaces con get -->
    <a href="recibir_get.php?curso=desarrollo_web">Desarrollo web</a>
    <a href="recibir_get.php?curso=pogramacion">Pogramacion</a>
    <a href="recibir_get.php?curso=base_datos">Base de datos</a>

    <hr>
    <h2>EJERCICIO POST</h2>
    <!--FORMULARIO POST -->
    <form method="POST" action="recibir_post.php">
        <label>Nombre: </label><br>
        <input type="text" name="nombre"><br>
        <label>Correo: </label><br>
        <input type="email" name="correo"><br>
        <button type="submit">Enviar</button>


</body>

</html>