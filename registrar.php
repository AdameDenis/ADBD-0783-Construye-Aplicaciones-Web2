<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (nombre, correo, telefono, password) 
        VALUES ('$nombre', '$correo', '$telefono', '$password')";

if (mysqli_query($conexion, $sql)) {
    echo "¡Registro guardado correctamente!";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>