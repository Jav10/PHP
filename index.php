<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<style>
			body{
				font-family: arial;
				font-weight: bolder;				
				background-image:url("balls.jpg");
			}
			h1{
				color: white;
				margin: 0 auto;
				margin-top: 500px;
			}
			div{
				margin-left: 70%;
			}
		</style>
	</head>
	<body>
		<div>Hola,<?php echo $_SESSION["usuario"]?>. <a href="phpLogout.php"><button>Salir</button></a></div>
		<?php
			if(isset($_SESSION['usuario'])){
				unset($_SESSION['error']);
				echo "<h1>Bienvenido Sayayin ".$_SESSION['usuario']."</h1>";
				
			}
			else{
				header("Location: phpLogin.php");
			}
			
		?>
		
	</body>
</html>