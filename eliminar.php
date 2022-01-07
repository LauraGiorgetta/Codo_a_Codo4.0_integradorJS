<?php

include 'conexion.php';

$id=$_GET['id'];

$datoAeliminar = "DELETE FROM usuarios WHERE id=$id";

$delete = mysqli_query($conexion, $datoAeliminar);

header("Location: listado.php");