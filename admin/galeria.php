<?php

require_once __DIR__ . "/../config/conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $descripcion = trim($_POST["descripcion"] ?? "");

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === 0) {

        $nombre_imagen = basename($_FILES["imagen"]["name"]);

        $ruta_guardar = __DIR__ . "/../imagenes/" . $nombre_imagen;
        $ruta_bd = "imagenes/" . $nombre_imagen;

        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_guardar)) {

            $descripcion = mysqli_real_escape_string($conn, $descripcion);
            $ruta_bd = mysqli_real_escape_string($conn, $ruta_bd);

            $sql = "INSERT INTO galeria (imagen, descripcion)
                    VALUES ('$ruta_bd', '$descripcion')";

            if (mysqli_query($conn, $sql)) {
                $mensaje = "Imagen agregada correctamente.";
            } else {
                $mensaje = "Error al guardar la imagen.";
            }

        } else {
            $mensaje = "No se pudo subir la imagen.";
        }

    } else {
        $mensaje = "Seleccione una imagen.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Administrar galería</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

<nav class="admin-nav">
    <a href="perfil.php">Perfil</a>
    <a href="atestados.php">Atestados</a>
    <a href="galeria.php">Galería</a>
    <a href="../index.php">Ver sitio</a>
</nav>

<div class="admin-contenedor">

    <h1>Administrar galería</h1>

    <?php if ($mensaje != "") { ?>
        <p class="mensaje"><?php echo $mensaje; ?></p>
    <?php } ?>

    <form method="POST" enctype="multipart/form-data">

        <label>Seleccionar imagen:</label>

        <input
            type="file"
            name="imagen"
            accept="image/*"
            required
        >

        <label>Descripción:</label>

        <input
            type="text"
            name="descripcion"
            placeholder="Escriba una descripción de la imagen"
            required
        >

        <button type="submit">
            Agregar imagen
        </button>

    </form>

</div>

</body>
</html>