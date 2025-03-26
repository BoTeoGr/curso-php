<!-- php -S localhost:Port para iniciar el entorno de desarrollo -->

<?php

include "variables.php";

include "tipos-variables.php";

include "condicion.php";

include "match.php";

include "arrays.php";

//Concatenación
$output = "<h1>Hola $name";
$output .= ", con una edad de $edad \$carácter</h1>"; //<-- .= concateno lo que ya existe con lo que voy a agregar. \ es para escapar el carácter

//Constantes (deben de estar en el mismo fichero que las usan)
define("URL", "https://www.google.com"); //<-- Recomendado usar mayúsculas
const URL2 = "https://www.google.com";
?>


<a href="<?= URL ?>" target="_blank">Google</a>
<?= $output ?> <!--Forma corta de echo -->


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>