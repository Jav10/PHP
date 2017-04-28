<?php
session_start();
$_SESSION["nombre"]="arturo";
if($_POST["nombre"]==$_SESSION["nombre"]){
	Header( "Location: phpSession2.php");
}
else{
	Header( "Location: phpSessionFormulario.php");
	$_SESSION["error"]=404;
}

?>