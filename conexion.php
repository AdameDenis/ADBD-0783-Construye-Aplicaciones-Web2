<?php
$conexion = mysqli_connect("localhost", "root", "", "tienda_joyas");

if (!$conexion) {
    die("Error al conectar con la base de datos");
}
?>