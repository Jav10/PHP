<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>

		<form action="phpSession1.php" method="post">
			Nombre: <input type="text" name="nombre"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
		</form>
		<?php
		
		if(isset($_SESSION["error"])){
			echo "<p style='text-align: center; color: red;'>Tu nombre o correo son incorrectos</p>";
		}
		
		?>
	</body>
</html> 