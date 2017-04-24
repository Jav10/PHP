<?php
	
	//Declarar constante
	define("PI",3.141516,false);
	
	//Declarar variable, concatenar con "."
	$nombre = "Arturo"." ".PI;
	//Imprimir variable
	echo $nombre;
	echo "<br>";
	echo 5+PI;
	echo "<br>";
	echo "Los tipos de datos soportados por php son los siguientes: ";
	echo "String, Integer, Float, Boolean, Array y Object";
	echo "<br>";
	echo "Alcance de una variable: ";
	function nombre(){
		global $nombre;
		//Si no usaramos la palabra reservada global nos arrojaria un error
		echo $nombre;
	}
	nombre();
	echo "<br>";
	echo "Ejemplo de una variable variable";
	echo "<br>";
	$hello = "Hola a todos";
	$saludo = "hello";
	echo $$saludo;
	
	echo "<br>";
	echo "Operadores Aritméticos";
	echo "<br>";
	echo "+,-,*,/,%";
	echo "<br>";
	echo "Incremento y decremento (++pre y pos--)";
	echo "<br>";
	echo "++,--";
	echo "<br>";
	echo "Operadores de asignación";
	echo "<br>";
	echo "=,+=,-=,*=,/=,%=";
	echo "<br>";
	echo "Operadores de comparación";
	echo "<br>";
	echo "==,===,!=,!===,<>,<,>,<=,>=";
	echo "<br>";
	echo "Operadores lógicos";
	echo "<br>";
	echo "and, or, xor, &&, ||,!";
?>