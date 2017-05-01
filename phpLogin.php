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
				background-image:url("door.jpg");
			}
			div{
				text-align: center;
				color: white;
				margin-left: 50%;
				margin-top: 300px;
				width: 300px;
			}
			#error{
				margin-left: 22%;
				text-align: center;
				color: black;
			}
		</style>
	</head>
	<body>
		<div>
			<form action="phpVerificar.php" method="POST">
				<fieldset>
					<legend>Login</legend>
					<label for="us">Usuario: </label>
					<input type="text" name="user" id="us" placeholder="Usuario">
					<br>
					<label for="cs">Contraseña: </label>
					<input type="password" name="password" id="cs" placeholder="Contraseña">
					<br>
					<input type="submit" value="Enviar">
				</fieldset>
			</form>
		</div>
		<?php
			if(isset($_SESSION["usuario"])){
				header("Location: index.php");
			}
			elseif(isset($_SESSION['error'])){
				echo "<p id='error'>Tú usuario o contraseña son incorrectos.</p>";
			}
		?>
	</body>
</html>