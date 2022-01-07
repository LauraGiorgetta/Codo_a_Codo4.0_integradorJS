<?php
include 'conexion.php';

$consultas = mysqli_query($conexion, "SELECT * FROM usuarios" );
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
                <li><a href="registrarse.html">Registrarse</a></li>
                <li><a href="tickets.html" class="t-green">Comprar tickets</a></li>
            </ul>
        </nav>
        <style>
            table{
                border: 2px darkblue ridge;
                display: block;
            }
            tbody{
                display: block;
            }
            tr{
                display: grid;
                grid-template-columns: repeat(5, 2fr) 4fr 2fr 2fr;
            }
            td{
                border-left: cyan 2px dotted;
                border-top: gray 1px solid;
            }
            td:first-of-type{
                border-left: none;
            }
            th{
                border-left: darkblue 2px ridge;
                border-bottom: darkblue 2px ridge;
            }
            th:first-of-type{
                border-left: none;
            }
            tr:nth-of-type(2) td{
                border-top: none;
            }
        </style>
    </header>

    <section id="registro">
        <h2><span class="chiquito">LISTADO DE</span>USUARIOS</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Tel</th>
                <th>Correo</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php
                while( $tabla = mysqli_fetch_array($consultas)){
            ?>
            <tr>
                <td> <?= $tabla['id']; ?> </td>
                <td> <?= $tabla['nombre']; ?> </td>
                <td> <?= $tabla['apellido']; ?> </td>
                <td> <?= $tabla['dni']; ?> </td>
                <td> <?= $tabla['telefono']; ?> </td>
                <td> <?= $tabla['correo']; ?> </td>
                <td> <a href="actualizar2.php?id=<?= $tabla['id']; ?>"> Actualizar </a> </td>
                <td> <a href="eliminar.php?id=<?= $tabla['id']; ?>"> Eliminar </a> </td>
            </tr>
            <?php } ?>
            
        </table>
        
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