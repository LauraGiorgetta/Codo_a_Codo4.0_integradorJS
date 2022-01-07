<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios (nombre,apellido,dni,telefono,correo,password) VALUES('$nombre','$apellido','$dni','$telefono','$correo','$password')";

$insertar = mysqli_query($conexion,$query);

if(!$insertar) {
    echo 'Fallo en subir los datos ...';
} else{

    header("Location: listado.php");
}