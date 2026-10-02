<?php

require_once __DIR__ . "/config/conexion.php";

$sql = "SELECT * FROM perfil WHERE id = 1";
$resultado = mysqli_query($conn, $sql);

$perfil = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="acerca.php">Acerca de mí</a>
        <a href="atestados.php">Atestados</a>
        <a href="galeria.php">Galería</a>
        <a href="contacto.php">Contacto</a>
        <a href="admin/perfil.php">Administrar</a>
    </nav>

    <div class="contenedor">

        <h1>Contacto</h1>

        <h2>Información de contacto</h2>

        <p>
            <strong>Correo electrónico:</strong>
            <?php echo $perfil["correo"]; ?>
        </p>

        <p>
            <strong>Teléfono:</strong>
            <?php echo $perfil["telefono"]; ?>
        </p>

    </div>

    <footer>
        Ronald Araya - Sitio web personal
    </footer>

</body>

</html>
