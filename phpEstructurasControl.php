<?php
	
	//sentencia if elseif elsei
	$nombre="Max";
	if($nombre=="max"){
		
		echo "dentro de if";
	}
	elseif($nombre="Max"){
		echo "dentro de elseif";
	}
	else{
		echo "dentro de else";
	}
	echo "<br>";
	echo "<br>";
	//ciclo while
	$i=1;
	while($i<3){
		echo "$i vez dentro de while";
		echo "<br>";
		$i++;
	}
	//ciclo do While
	echo "<br>";
	echo "<br>";
	$i=1;
	do{
		echo "vez $i en el ciclo do while";
		echo "<br>";
		$i++;
	}while($i<5);
	echo "<br>";
	echo "<br>";
	//ciclo for
	for($i=1;$i<=10;$i++){
		echo "$i vez dentro de for";
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	//ciclo foreach se usa para recorrer arreglos
	$arreglo = array(
		0=>array(21,32),
		1=>array("joaquin","josefina")
	);
	foreach($arreglo as $key){
		foreach($key as $llave=>$value){
			echo $llave.":".$value;
		    echo "<br>";
		}
	}
	echo "<br>";
	echo "<br>";
	//sentencia switch
	$opcion=3;
	switch($opcion){
		case 1:
			echo "soy la opcion 1";
			break;
		case 2:
			echo "soy la opcion 2";
			break;
		case 3:
			echo "soy la opcion 3";
			break;
		default:
			echo "yo soy la opcion default";
	}
	//break sale del ciclo
	//continue salta a la siguiente iteración
	echo "<br>";
	echo "<br>";
	//include y require
	include 'footer.php';
?>