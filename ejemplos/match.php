<?php
//Match
$age = 17;
$outputAge = match (true /*Parametro o usar true para evaluar directamente*/) {
    $age > 18 => "Es mayor de edad",
    $age === 18 => "Tienes 18 años",
    default => "Es menor de edad"
};
echo "<p>" . $outputAge . "</p>";
