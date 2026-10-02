<?php

require_once __DIR__ . "/config/conexion.php";

$sql = "SELECT * FROM galeria";
$resultado = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galería</title>

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

        <h1>Galería</h1>

        <div class="galeria">

            <?php while ($foto = mysqli_fetch_assoc($resultado)) { ?>

                <div class="foto">

                    <img
                        src="<?php echo $foto["imagen"]; ?>"
                        alt="<?php echo $foto["descripcion"]; ?>"
                        onclick="abrirImagen(this)">

                    <p>
                        <?php echo $foto["descripcion"]; ?>
                    </p>

                </div>

            <?php } ?>

        </div>

    </div>

    <!-- Visor de imagen -->
    <div id="visorImagen" class="visor-imagen">

        <span class="cerrar-visor" onclick="cerrarImagen()">
            &times;
        </span>

        <img id="imagenGrande" class="imagen-grande" src="" alt="Imagen ampliada">

        <p id="descripcionImagen" class="descripcion-imagen"></p>

    </div>

    <footer>
        Ronald Araya - Sitio web personal
    </footer>


    <script>

        function abrirImagen(imagen) {

            const visor = document.getElementById("visorImagen");
            const imagenGrande = document.getElementById("imagenGrande");
            const descripcion = document.getElementById("descripcionImagen");

            imagenGrande.src = imagen.src;
            descripcion.textContent = imagen.alt;

            visor.classList.add("mostrar");

        }


        function cerrarImagen() {

            const visor = document.getElementById("visorImagen");

            visor.classList.remove("mostrar");

        }


        // Cerrar haciendo clic fuera de la imagen
        document.getElementById("visorImagen").addEventListener("click", function(event) {

            if (event.target === this) {
                cerrarImagen();
            }

        });


        // Cerrar presionando ESC
        document.addEventListener("keydown", function(event) {

            if (event.key === "Escape") {
                cerrarImagen();
            }

        });

    </script>

</body>

</html>