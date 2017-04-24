<?php

//crear funciones
function saludar(){
	echo "hola como estan?";
}
//llamar funciones
saludar();
echo "<br>";
echo "<br>";
//funciones con parámetros
function suma($num1,$num2){
	echo $num1+$num2;
}
suma(2,3);
echo "<br>";
echo "<br>";
//funciones con parámetros por default
function mult($num1=1,$num2=2){
	echo $num1*$num2;
}
mult(2,2);
echo "<br>";
echo "<br>";
mult(4);
echo "<br>";
echo "<br>";
mult();
echo "<br>";
echo "<br>";
//sentencia return
function resta($num1=2,$num2=1){
	$resultado = $num1-$num2;
	return $resultado;
}

echo resta(1,5);
?>