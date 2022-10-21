<?php
include_once 'vue/vue_header.php';
include_once 'modele/mod_artiste.php';

$artistes = get_artistes();

include_once 'vue/vue_artiste.php';
include_once 'vue/vue_footer.php';

?>