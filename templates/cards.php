<!-- card_template.php -->
<div class="planet_card <?= $data["faction"]?>">

        <h3>planeta: <?= $data["name"];?></h3>
        <p>dominado por: <?= $data["faction"];?></p>
        <p>Helldivers activos: <?= $data["players"];?></p>
        <p><?= round($data["percentage"], 2);?>%</p>
        <progress class="progress-bar" value="<?= $data["percentage"];?>"  max="100"></progress>

</div>