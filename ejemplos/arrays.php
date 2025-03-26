<?php
//Arrays
$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[2] = "TypeScript";

$person = [
    "name" => "Mateo",
    "age" => 18,
    "city" => "Pereira",
    "languages" => ["PHP", "JavaScript", "Python"]
];

$person["languages"][1] = "TypeScript";
?>

<!-- Iteración de arrays -->
<ul>
    <?php foreach ($bestLanguages as $index => $language) : ?>
        <li><?= $index . " - " . $language ?></li>
    <?php endforeach; ?>
</ul>