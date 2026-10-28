<?php
// Indica que aquí comienza el código PHP.

include("conexion.php");
// Trae e incluye el archivo "conexion.php" para poder usar la variable $conexion que conecta a la base de datos.
$correo = $_POST['correo'];
// Recibe el correo que el usuario escribió en el formulario web y lo guarda en la variable $correo.
$password = $_POST['password'];
// Recibe la contraseña ingresada en el formulario y la guarda en la variable $password.
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
// Prepara la consulta para buscar en la tabla "usuarios" a alguien que coincida con ese correo y esa contraseña.
$resultado = mysqli_query($conexion, $sql);
// Envía la consulta a la base de datos usando la conexión abierta y guarda la respuesta en $resultado.
if (mysqli_num_rows($resultado) > 0) {
// Cuenta cuántas filas devolvió la búsqueda y pregunta: "¿Se encontró al menos 1 usuario?"
    echo "¡Inicio de sesión exitoso! Bienvenido.";
    // Si se encontró al usuario, muestra este mensaje de bienvenida en pantalla.
} else {
// Si no se encontró ninguna coincidencia en la base de datos:
    echo "Correo o contraseña incorrectos.";
    // Muestra este mensaje de error indicando que los datos no coinciden.
}
// Cierra el bloque de la comprobación.

?>
// Indica que aquí termina el código PHP.
