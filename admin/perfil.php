<?php

require_once __DIR__ . "/../config/conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $descripcion = trim($_POST["descripcion"] ?? "");
    $presentacion = trim($_POST["presentacion"] ?? "");
    $acerca = trim($_POST["acerca"] ?? "");
    $intereses = trim($_POST["intereses"] ?? "");
    $habilidades = trim($_POST["habilidades"] ?? "");
    $experiencia = trim($_POST["experiencia"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");

    $nombre = mysqli_real_escape_string($conn, $nombre);
    $descripcion = mysqli_real_escape_string($conn, $descripcion);
    $presentacion = mysqli_real_escape_string($conn, $presentacion);
    $acerca = mysqli_real_escape_string($conn, $acerca);
    $intereses = mysqli_real_escape_string($conn, $intereses);
    $habilidades = mysqli_real_escape_string($conn, $habilidades);
    $experiencia = mysqli_real_escape_string($conn, $experiencia);
    $correo = mysqli_real_escape_string($conn, $correo);
    $telefono = mysqli_real_escape_string($conn, $telefono);

    $sql = "UPDATE perfil SET
                nombre_completo = '$nombre',
                descripcion_personal = '$descripcion',
                presentacion = '$presentacion',
                acerca_de_mi = '$acerca',
                intereses = '$intereses',
                habilidades = '$habilidades',
                experiencia_conocimientos = '$experiencia',
                correo = '$correo',
                telefono = '$telefono'
            WHERE id = 1";

    if (mysqli_query($conn, $sql)) {
        $mensaje = "Información actualizada correctamente.";
    } else {
        $mensaje = "Error al actualizar la información.";
    }
}

$sql = "SELECT * FROM perfil WHERE id = 1";
$resultado = mysqli_query($conn, $sql);
$perfil = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar perfil</title>

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

        <h1>Administrar perfil</h1>

        <?php if ($mensaje != "") { ?>
            <div class="mensaje">
                <?php echo $mensaje; ?>
            </div>
        <?php } ?>

        <form method="POST">

            <label>Nombre completo:</label>
            <input
                type="text"
                name="nombre"
                value="<?php echo $perfil["nombre_completo"]; ?>"
                required
            >

            <label>Descripción personal:</label>
            <textarea name="descripcion" required><?php echo $perfil["descripcion_personal"]; ?></textarea>

            <label>Presentación:</label>
            <textarea name="presentacion" required><?php echo $perfil["presentacion"]; ?></textarea>

            <label>Acerca de mí:</label>
            <textarea name="acerca" required><?php echo $perfil["acerca_de_mi"]; ?></textarea>

            <label>Intereses:</label>
            <textarea name="intereses" required><?php echo $perfil["intereses"]; ?></textarea>

            <label>Habilidades:</label>
            <textarea name="habilidades" required><?php echo $perfil["habilidades"]; ?></textarea>

            <label>Experiencia y conocimientos:</label>
            <textarea name="experiencia" required><?php echo $perfil["experiencia_conocimientos"]; ?></textarea>

            <label>Correo electrónico:</label>
            <input
                type="email"
                name="correo"
                value="<?php echo $perfil["correo"]; ?>"
                required
            >

            <label>Teléfono:</label>
            <input
                type="text"
                name="telefono"
                value="<?php echo $perfil["telefono"]; ?>"
                required
            >

            <button type="submit">Guardar cambios</button>

        </form>

    </div>

</body>
</html>