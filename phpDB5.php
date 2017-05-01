<?php
require "phpConexionDB.php";

$sql = "UPDATE datos SET nombre='beto' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Actualización exitosa.";
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();


?>