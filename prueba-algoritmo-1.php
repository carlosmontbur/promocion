<?php

/*
Dado el string A56B455VB23GTY23J 
Eliminar todos los caracteres
Extraer cada número que esté comprendido entre dichos caracteres y añadirlo a un array
El array debe contener valores únicos y deberá estar ordenado de menor a mayor.
la salida del código será la siguiente
Array ( [0] => 23 [1] => 56 [2] => 455 )

Debes medir el tiempo que tarda en ejecutarse la llamada, hay que implementar el método intentando obtener el máximo performance posible.
Indicar la complejidad según Big-io
El código debe implementar la misma lógica para cualquier otro String
*/
	
echo "----------------------PRUEBA 1----------------------";
echo "<br>";
echo "<br>";
$start = microtime(true);
print_r(ExtractNumbers::getNumbers('A56B455VB23GTY23'));
$time_elapsed= microtime(true) - $start;
echo "<br>";
echo "<br>";
echo "El tiempo de ejecución del archivo ha sido de " . $time_elapsed . " segundos";
echo "<br>";
echo "<br>";
echo "----------------------PRUEBA 2----------------------";
echo "<br>";
echo "<br>";
$start = microtime(true);
print_r(ExtractNumbers::getNumbers('A32JASD35235DKH3KH5LL4'));
$time_elapsed= microtime(true) - $start;
echo "<br>";
echo "<br>";
echo "El tiempo de ejecución del archivo ha sido de " . $time_elapsed . " segundos";
echo "<br>";
echo "<br>";
echo "----------------------PRUEBA 3----------------------";
echo "<br>";
echo "<br>";
$start = microtime(true);
print_r(ExtractNumbers::getNumbers('A1B2C3D4E5F6'));
$time_elapsed= microtime(true) - $start;
echo "<br>";
echo "<br>";
echo "El tiempo de ejecución del archivo ha sido de " . $time_elapsed . " segundos";


class ExtractNumbers
{	
    public function getNumbers($string)
    {	
    	$resultado = array();
    	$temp="";
    	$aux= -1;
    	for ($i = 0; $i < strlen($string); $i++) {
		    if (is_numeric($string[$i])){		    	
		    	$temp .= $string[$i];
		    }elseif (is_numeric($string[$i-1]) and $temp!=""){
		    	array_push($resultado, $temp);
		    	$temp="";
		    }
		    if ($i == strlen($string)-1 and $temp!=""){
		    	array_push($resultado, $temp);
		    }
		}

		$resultado = array_unique($resultado);
		sort($resultado);
		return $resultado;  
    	
    }

}