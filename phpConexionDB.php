<?php
$server = "localhost";
$usuario = "root";
$password = "";
$db = "usuario";
// Crear conexion
$conn = mysqli_connect($server, $usuario, $password, $db);
// Verificar conexion
if (!$conn) {
	//mostrar error
    die("No se pudo conectar." . mysqli_connect_error());
}