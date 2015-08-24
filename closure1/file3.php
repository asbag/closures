<?php
/**
En los ejemplos que hemos visto hasta ahora, 
las funciones se han almacenado en variables. 
Este es un uso habitual, sin embargo también 
podemos prescindir de una variable y utilizar 
la función anónima directamente.
Vamos a ver un ejemplo de utilizar una 
función anónima en el retorno de otra función:
*/

function anyadePrefijo($cadena) {
	return function ($prefijo) use ($cadena) {
		echo $prefijo . " - " . $cadena;
	};
}

$cad = "una prueba";
$c = anyadePrefijo($cad);
echo $c("Esto es ");
