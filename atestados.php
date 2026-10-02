<?php

require_once __DIR__ . "/config/conexion.php";

$sql = "SELECT * FROM atestados";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Atestados académicos</title>
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

        <h1>Atestados académicos</h1>

        <?php while ($atestado = mysqli_fetch_assoc($resultado)) { ?>

            <div class="atestado">

                <h2>
                    <?php echo $atestado["titulo"]; ?>
                </h2>

                <p>
                    <strong>Institución:</strong>
                    <?php echo $atestado["institucion"]; ?>
                </p>

                <p>
                    <strong>Año:</strong>
                    <?php echo $atestado["anio"]; ?>
                </p>

                <p>
                    <?php echo $atestado["descripcion"]; ?>
                </p>

                <img
                    src="<?php echo $atestado["imagen"]; ?>"
                    alt="Imagen del atestado">

            </div>

        <?php } ?>

    </div>

    <footer>
        Ronald Araya - Sitio web personal
    </footer>

</body>

</html>
