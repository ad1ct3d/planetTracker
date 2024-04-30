<?php
declare(strict_types=1);

const API_URL = "https://helldiverstrainingmanual.com/api/v1/war/campaign";

function render_template(string $template, array $data = []){
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if ($result === false) {
        // Manejo de error en caso de que la solicitud cURL falle
        throw new Exception("Error al obtener datos de la API: " . curl_error($ch));
    }
    curl_close($ch);
    $data = json_decode($result, true);
    if ($data === null) {
        // Manejo de error en caso de que no se pueda decodificar el JSON
        throw new Exception("Error al decodificar datos JSON");
    }
    return $data;
}



## player count

function player_counter($data)
{
    $total_players=0;
    for ($i = 0; $i < count($data); $i++) {

        $total_players += count($data[$i]["players"]);

    ?>
    <h3>Helldivers activos: <?= $total_players;?></h3>
    <?php
}
}

/* $total_players = player_counter($data); */



## CARD GENERATOR

function card_generator($data)
{for ($i = 0; $i < (count($data)); $i++) {

    render_template('cards', $data[$i]);

}}
?>