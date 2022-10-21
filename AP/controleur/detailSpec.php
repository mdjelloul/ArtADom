<?php
$idSpectacleChoisi = $_GET["choixId"];
include_once 'vue/vue_header.php';   
include_once 'modele/mod_spectacle.php';

$lesSpectacles = get_detailSpec($idSpectacleChoisi);

include_once 'vue/vue_detailSpec.php';

