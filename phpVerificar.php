<?php
session_start();
require "phpConexionDB.php";
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salen los datos de cada fila
    while($tupla = $result->fetch_assoc()) {
        if($tupla['nombre']==$_POST['user'] && $tupla['pass']==$_POST['password']){
			$_SESSION['usuario']=$_POST['user'];
			//header("Location: index.php");
		}
		else{
			$_SESSION['error']= true;
			header("Location: phpLogin.php");
		}
    }
} else {
    echo "No hay información en la BD.";
}
$conn->close();


?>