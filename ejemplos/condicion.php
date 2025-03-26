<?php
//Comparación
$isOldest = $edad >= 18;

//Condición
if ($isOldest) {
    echo "<p>Es mayor de edad</p>";
} else {
    echo "<p>Es menor de edad</p>";
}

//Ternario ? if : else (elseif debe ir juntos)
$isOldest ? "<p>Es mayor de edad</p>" : "<p>Es menor de edad</p>";
?>

<!-- Sintaxis alternativa de condición -->
<?php if ($isOldest): ?>
    <p>Es mayor de edad</p>
<?php else: ?>
    <p>Es menor de edad</p>
<?php endif; ?>