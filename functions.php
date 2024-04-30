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

function sum_total_players(array $data): int {
    $total_players = 0;
    foreach ($data as $planet) {
        $total_players += count($planet["players"]);
    }
    return $total_players;
}




## CARD GENERATOR

function card_generator($data)
{for ($i = 0; $i < (count($data)); $i++) {
    render_template('cards', $data[$i]);
}}
?>