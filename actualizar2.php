
<?php

include 'conexion.php';

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=$id";

$resultado = mysqli_query($conexion,$sql);



$fila = mysqli_fetch_array($resultado);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador Codo a Codo JS</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <nav class="bg-black">
            <div class="logo">
                <img src="img/codoacodo.png" alt="Codo a Codo">
                <h1>Conf Bs As</h1>
            </div>
            <ul>
                <li><a href="index.html#conf-bsas" class="t-white">La conferencia</a></li>
                <li><a href="index.html#oradores">Los oradores</a></li>
                <li><a href="index.html#lugar">El lugar y la fecha</a></li>
                <li><a href="index.html#formulario">Conviértete en orador</a></li>
                <li><a href="#">Registrarse</a></li>
                <li><a href="tickets.html" class="t-green">Comprar tickets</a></li>
            </ul>
        </nav>
    </header>

    <section id="registro">
        <h2><span class="chiquito">ID</span>REGISTRO</h2>

        <form action="actualizar.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
            <input type="number" name="dni" placeholder="DNI" required>
            <input type="number" name="telefono" placeholder="Telefono" required>
            <input type="email" name="correo" id="email" placeholder="Correo" required>
            <input type="password" name="password" id="password" placeholder="Password" required minlength="6">
            <input type="hidden" name="id" value="<?= $fila['id']; ?> " >
            <button type="reset">Borrar</button>
            <button type="submit">Actualizar</button>
        </form>
    </section>
    <footer>
        <a href="#">Preguntas frecuentes</a>
        <a href="#">Contáctanos</a>
        <a href="#">Prensa</a>
        <a href="#">Conferencias</a>
        <a href="#">Términos y condiciones</a>
        <a href="#">Privacidad</a>
        <a href="#">Estudiantes</a>
    </footer>
</body>

</html>
