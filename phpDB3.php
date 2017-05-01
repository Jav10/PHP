<?php
require "phpConexionDB.php";
$sql = "INSERT INTO datos (nombre, apellido, email,pass)
VALUES ('vegeta', 'principe sayayin', 'principesayan@gmail.com','bulma')";

if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
    echo "Datos insertados correctamente.<br>Último ID registrado: $last_id.";
} else {
    echo "Ocurrio un error: " . mysqli_error($conn);
}

mysqli_close($conn);


?>