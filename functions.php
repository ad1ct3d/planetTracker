<?php
declare(strict_types=1);

const API_URL = "https://helldiverstrainingmanual.com/api/v1/war/campaign";
# inicializar sesion de cURL; ch = cUrl handle

function render_template (string $template, array $data = []){
    extract($data);

    require "templates/$template.php";
}

function get_data(string $url):array {
    $result = file_get_contents($url);

    $data = json_decode($result, true);

    return $data;
};

## player count

function player_counter($data)
{for ($i = 0; $i < (count($data)); $i++) {

    $total_players = array_reduce($data[$i]["players"], "sum");
    return $total_players;
}}




## CARD GENERATOR

function card_generator($data)
{for ($i = 0; $i < (count($data)); $i++) {


?>


    <!-- OPEN HTML -->
        <div class="planet_card <?= $data[$i]["faction"]?>">
            <h3>planeta: <?= $data[$i]["name"];?></h3>
            <p>dominado por: <?= $data[$i]["faction"];?></p>
            <p>Helldivers activos: <?= $data[$i]["players"];?></p>
            <p><?= $data[$i]["percentage"];?>%</p>
            <progres value="<?= $data[$i]["percentage"];?>"  max="100"></progress>

        </div>
    <!-- CLOSE HTML -->


<?php
}}
?>