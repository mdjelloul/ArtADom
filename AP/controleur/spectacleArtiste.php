<?php
include_once 'vue/vue_header.php';   
include_once 'modele/mod_spectacle.php';
include_once 'modele/mod_artiste.php';

$lesSpectacles = get_spectacles_by_artiste($_GET['id']);
$artiste = get_artiste($_GET['id']);

include_once 'vue/vue_spectacleArtiste.php';
include_once 'vue/vue_footer.php';
?>