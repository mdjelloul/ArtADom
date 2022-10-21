<?php
include_once 'vue/vue_header.php';
include_once 'modele/mod_artiste.php';

$artiste = get_artiste();

include_once 'vue/vue_dartiste.php';
include_once 'vue/vue_footer.php';

?>