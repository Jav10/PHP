<?php
	
	//Declarar arreglo
	//Otra forma de declararlo $arreglo = array(25,"pepe",true);
	$arreglo[0]=25;
	$arreglo[1]="Pepe";
	$arreglo[2]=true;
	echo "Tenemos nosotros $arreglo[0] pesos y se los daremos a $arreglo[1] esto es $arreglo[2]";
	echo "<br>";
	echo "<br>";
	echo "Arrays Asociativos";
	echo "<br>";
	//Otra forma sería $alumnos["pablo"]=19;
	$alumnos = array("pedro"=>21,"pepito"=>34,"pablo"=>19);
	echo $alumnos["pepito"];
	echo "<br>";
	echo "<br>";
	echo "Arrays Multidimencionales";
	$otroArreglo = array(
		'nombre'=>array("pablo","pedro"),
		'edad'=>array(23,32)
	);
	echo "<br>";
	echo $otroArreglo['edad'][1];

?>