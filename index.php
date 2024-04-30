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

<?php render_template('head')?>  <!-- HEAD -->

<?php render_template('main', $data); ?><!-- BODY -->
