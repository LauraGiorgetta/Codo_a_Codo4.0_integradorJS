<?php

// conexion
include 'conexion.php';

//var_dump($_POST);

// insertar registros
// datos de cada registro
// obtenidos de un formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];
// query de insercion
$query = "INSERT INTO registro (nombre,apellido,dni,telefono,correo,password) VALUES('$nombre','$apellido','$dni','$telefono','$correo','$password')";

$insertar = mysqli_query($conexion,$query);

if($insertar) {
    echo 'datos ingresados correctamente ...';
}



?>