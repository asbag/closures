<?php
/**
Las variables dentro de una cláusula  no están 
vinculados necesariamente a copias de las variables 
en el ámbito padre, pero se pueden vincular a las propias 
variables. Al igual que una función normal, los parámetros 
de una cláusula, por defecto, serán pasados por 'valor'. 
Lo que significa que si dentro de la cláusula actualizamos 
el valor del parámetro fuera de ella no se actualizará. 
Evidentemente podremos solucionar esto pasando el valor 
por referencia. Para ello antepondremos el carácter & 
al parámetro.
*/

$cadena = "Esto es un ejemplo!";
$clausula = function () use (&$cadena) {
	$cadena .= " - modificado!!";
};

$clausula2 = function () use (&$cadena) {
	$cadena .= " - modificado2!!";
};

$clausula($cadena);
echo $cadena . "<br/>";
$clausula2();
echo $cadena;