<?php
include_once 'vue/vue_header.php';   
include_once 'modele/mod_spectacle.php';

$lesSpectacles = get_spectacles();

include_once 'vue/vue_spectacle.php';
include_once 'vue/vue_footer.php';
?>