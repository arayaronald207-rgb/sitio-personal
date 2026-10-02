<?php

require_once __DIR__ . "/../config/conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo = trim($_POST["titulo"] ?? "");
    $institucion = trim($_POST["institucion"] ?? "");
    $anio = trim($_POST["anio"] ?? "");
    $descripcion = trim($_POST["descripcion"] ?? "");

    $titulo = mysqli_real_escape_string($conn, $titulo);
    $institucion = mysqli_real_escape_string($conn, $institucion);
    $anio = mysqli_real_escape_string($conn, $anio);
    $descripcion = mysqli_real_escape_string($conn, $descripcion);

    $sql = "UPDATE atestados SET
                titulo = '$titulo',
                institucion = '$institucion',
                anio = '$anio',
                descripcion = '$descripcion'
            WHERE id = 1";

    if (mysqli_query($conn, $sql)) {
        $mensaje = "Atestado actualizado correctamente.";
    } else {
        $mensaje = "Error al actualizar el atestado.";
    }
}

$sql = "SELECT * FROM atestados WHERE id = 1";
$resultado = mysqli_query($conn, $sql);
$atestado = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrar atestado</title>

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

        <h1>Administrar atestado</h1>

        <?php if ($mensaje != "") { ?>

            <div class="mensaje">
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>

        <form method="POST">

            <label>Nombre del curso o certificación:</label>

            <input
                type="text"
                name="titulo"
                value="<?php echo $atestado["titulo"]; ?>"
                required
            >

            <label>Institución:</label>

            <input
                type="text"
                name="institucion"
                value="<?php echo $atestado["institucion"]; ?>"
                required
            >

            <label>Año:</label>

            <input
                type="number"
                name="anio"
                value="<?php echo $atestado["anio"]; ?>"
                required
            >

            <label>Descripción:</label>

            <textarea
                name="descripcion"
                required><?php echo $atestado["descripcion"]; ?></textarea>

            <button type="submit">
                Guardar cambios
            </button>

        </form>

    </div>

</body>
</html>