<?php

$conexion = mysqli_connect("localhost", 'root', "", 'codo_a_codo_php');

if(mysqli_connect_errno()) {
    echo "fallo la conexion - error: " . mysqli_connect_errno();
} 
