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
    <title>Mi sitio personal</title>
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

    <h1><?php echo $perfil["nombre_completo"]; ?></h1>
    <img src="<?php echo $perfil["foto_perfil"]; ?>"
     alt="Fotografía de perfil"
     class="foto-perfil">
    
    <h2>Sobre mí</h2>
    <p><?php echo $perfil["descripcion_personal"]; ?></p>

    <h2>Presentación</h2>
    <p><?php echo $perfil["presentacion"]; ?></p>
    </div>

<footer>
    Ronald Araya - Sitio web personal
</footer>

</body>
</html>