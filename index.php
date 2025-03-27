<?php
const API_URL = "https://dev.whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL); //<-- Inicializa la sesión cURL

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //<-- Opción para que la respuesta sea devuelta como string (true)
$result = curl_exec($ch); //<-- Ejecuta la sesión cURL 

curl_close($ch); //<-- Cierra la sesión cURL

//una forma alternativa seria utilizar la función file_get_contents
// $result = file_get_contents(API_URL); //si solo se quiere hacer GET

$data = json_decode($result, true); //<-- Decodifica el JSON a un array (true para decodificar)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima película de Marvel</title>
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<body>
    <main>
        <section>
            <img src="<?= $data['poster_url'] ?>" width="250" alt="Poster de <?= $data['title'] ?>" style="border-radius: 10px;">
        </section>  
        <hgroup>
            <h3><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> días</h3>
            <p>Fecha de estreno: <?= $data['release_date'] ?></p>
            <img src="<?=$data['following_production']['poster_url']?>" width="100" alt="Poster de <?=$data['following_production']['title']?>" style="border-radius: 10px; margin-top: 10px;">
            <p>La siguiente es <?=$data['following_production']['title'] ?> en <?= $data['following_production']['days_until'] ?> días</p>
        </hgroup>
    </main>
</body>

</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-self: unset;   
    }
</style>