<?php

include 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$id = $_POST['id'];

#echo $nombre . $apellido . $correo . $dni . $telefono;


$actualizar = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo= '$correo', dni = '$dni', telefono = '$telefono', password = 'password' WHERE id = '$id'";

$actualizarBD = mysqli_query($conexion,$actualizar);

header('Location: listado.php');