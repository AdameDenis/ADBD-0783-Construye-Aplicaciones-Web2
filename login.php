<?php
include("conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "¡Inicio de sesión exitoso! Bienvenido.";
} else {
    echo "Correo o contraseña incorrectos.";
}
?>