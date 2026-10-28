<?php
// Indica que aquí comienza el código PHP.

include("conexion.php");
// Carga e incluye el archivo "conexion.php" para tener disponible la conexión a la base de datos.
$nombre = $_POST['nombre'];
// Recibe el nombre enviado desde el formulario y lo guarda en la variable $nombre.
$correo = $_POST['correo'];
// Recibe el correo enviado desde el formulario y lo guarda en la variable $correo.
$telefono = $_POST['telefono'];
// Recibe el teléfono enviado desde el formulario y lo guarda en la variable $telefono.
$password = $_POST['password'];
// Recibe la contraseña enviada desde el formulario y la guarda en la variable $password.
$sql = "INSERT INTO usuarios (nombre, correo, telefono, password) 
        VALUES ('$nombre', '$correo', '$telefono', '$password')";
// Prepara la instrucción para insertar un nuevo registro en la tabla "usuarios" con los datos ingresados.
if (mysqli_query($conexion, $sql)) {
// Ejecuta la consulta en la base de datos y evalúa si la inserción se realizó con éxito.
    echo "¡Registro guardado correctamente!";
    // Si los datos se guardaron bien, muestra este mensaje de confirmación.
} else {
// Si hubo algún problema al guardar la información en la base de datos:
    echo "Error: " . mysqli_error($conexion);
    // Muestra un mensaje indicando el error específico reportado por MySQL.
}
// Cierra el bloque de la comprobación.
// Indica que aquí termina el código PHP.
?>
