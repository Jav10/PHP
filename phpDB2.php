<?php
require "phpConexionDB.php";
$sql = "use usuario";
//Ejecutamos el código
if (mysqli_query($conn, $sql)) {
    echo "Se selecciono la base de datos";
} else {
    echo "Error al seleccionar la BD" . mysqli_error($conn);
}
// Creamos la tabla
$sql = "CREATE TABLE datos(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellido VARCHAR(30) NOT NULL,
email VARCHAR(50),
pass VARCHAR(16),
fecha_registro TIMESTAMP
)";
//Ejecutamos el código
if (mysqli_query($conn, $sql)) {
    echo "La tabla usuario se creo satisfactoriamente";
} else {
    echo "Error creando tabla " . mysqli_error($conn);
}
mysqli_close($conn);
?>