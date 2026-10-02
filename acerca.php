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
    <title>Acerca de mí</title>
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

    <h1>Acerca de mí</h1>

    <h2>Descripción</h2>
    <p><?php echo $perfil["acerca_de_mi"]; ?></p>

    <h2>Intereses</h2>
    <p><?php echo $perfil["intereses"]; ?></p>

    <h2>Habilidades</h2>
    <p><?php echo $perfil["habilidades"]; ?></p>

    <h2>Experiencia y conocimientos</h2>
    <p><?php echo $perfil["experiencia_conocimientos"]; ?></p>
    </div>

<footer>
    Ronald Araya - Sitio web personal
</footer>

</body>
</html>