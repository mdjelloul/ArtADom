<?php
include_once 'vue/vue_header.php';
include_once 'modele/mod_spectacles.php';

$spectacles = get_3spectacles();

include_once 'vue/vue_acceuil.php';
include_once 'vue/vue_footer.php';
?>