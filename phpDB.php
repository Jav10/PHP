<?php
$server = "localhost";
$usuario = "root";
$password = "";
// Crear conexion
$conn = mysqli_connect($server, $usuario, $password);
// Verificar conexion
if (!$conn){
	//mostrar error
    die("No se pudo conectar la conexion." . mysqli_connect_error());
}
// Crear Base de datos
$sql = "CREATE DATABASE usuario";
//ejecutar el código para crear la base de datos
if (mysqli_query($conn, $sql)) {
    echo "La base de datos se creo correctamente.";
} else {
    echo "Error al crear la base de datos: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 