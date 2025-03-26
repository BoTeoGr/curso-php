<?php
//Tipos de variables
echo "<h3>Gettype</h3>";
echo gettype($conversionAutomatica); //<-- gettype() muestra el tipo de variable y no se muestra directamente en el navegador
echo "<br>";
echo gettype($name);
echo "<br>";
echo "<h3>Var_dump</h3>";
var_dump($conversionAutomatica); //<-- var_dump() muestra el tipo de variable y el valor, se muestra directamente en el navegador
echo "<br>";
var_dump($name);
echo "<br>";
