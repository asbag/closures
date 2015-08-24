<?php
/**
 * Y otro uso muy común es utilizar una 
 * función anónima como callback. En el 
 * siguiente ejemplo vamos a utilizar una 
 * función anónima como callback para 
 * multiplicar los elementos de la misma 
 * posición de cada uno de los arrays.
 */

$multiplicador = function ($a, $b) {
	return $a * $b;
};

$numeros = range(1, 10);
$numeros2 = range(1, 10);
$lista = array_map($multiplicador, $numeros, $numeros2);

echo "------- Lista ------------\n";


echo implode(" ", $lista);