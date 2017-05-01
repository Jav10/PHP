<?php
require "phpConexionDB.php";
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($tupla = $result->fetch_assoc()) {
        echo "id: " . $tupla["id"]. " Nombre: " . $tupla["nombre"]. " " . $tupla["apellido"]." " . " E-mail:".$tupla["email"]." " . " Password: ".$tupla["pass"]." "." Fecha de registro: ". $tupla["fecha_registro"]. "<br>";
    }
} else {
    echo "No hay información en la BD.";
}
$conn->close();




?>