<!-- CALLS -->
<?php 
/* functions */
require_once 'functions.php';

/* API */
$data = get_data(API_URL);

?>


<!-- styles -->
<?php require_once 'styles/styles.php';?>

<!-- HTML -->


  <!-- HEAD -->
<?php render_template('head')?>

<!-- BODY -->
<?php render_template('main', $data); ?>

<!-- CARDS CONTAINER -->
<div class="cards_container"> 
<?= $cards = card_generator($data); ?>
</div>
