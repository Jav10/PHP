<?php
session_start();
echo "Bienvenido ".$_SESSION["nombre"];
unset($_SESSION["error"]);


?>