<?php
// CONEXION a BASE DE DATOS
// metodo:       mysqli_connect(parametros)
// parametros:   $hostname => donde esta alojada la BD
//               $username => usuario: 'root'
//               $password => pass:    ''       (por defecto)
//               $database => db:      'alumnos2021'
//               $port     =>
//               $socket   =>  
$conexion = mysqli_connect("localhost", 'root', "root", 'alumnos2021');

if(mysqli_connect_errno()) {
    echo "fallo la conexion - error: " . mysqli_connect_errno();
} else {
    echo "🤙 CONEXION ESTABLECIDA mediante archivo externo";
}
echo "<br><br>";

?>