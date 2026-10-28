<?php
// Indica al servidor que aquí comienza el código PHP.

$conexion = mysqli_connect("localhost", "root", "", "tienda_joyas");
// Intenta conectar con la base de datos en el equipo local ("localhost") usando el usuario "root" y sin contraseña (""), esto se guarda en la variable de conexion.

if (!$conexion) {
// Comprueba si la conexión falló.

    die("Error al conectar con la base de datos");
    // Si hubo un fallo, interrumpe el programa en este punto y muestra el mensaje de error.

}
// Cierra el bloque de la comprobación.
// Indica que aquí termina el bloque de código PHP.
?>
