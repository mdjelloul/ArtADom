<?php

if(!isset($_GET['section'])){
    include_once 'controleur/acceuil.php';
} else {
    switch ($_GET['section']) {
        case 'artiste':
            include_once 'controleur/artiste.php';
            break;
        case 'dartiste':
            include_once 'controleur/dartiste.php';
            break;
        case 'spectacle':
            include_once 'controleur/spectacle.php';
            break;
        case 'spectacleArtiste':
            include_once 'controleur/spectacleArtiste.php';
            break;
        case 'detailSpectacle':
            include_once 'controleur/detailSpec.php';
            break;
        case 'contact':
            include_once 'controleur/contact.php';
            break;
        default:
            include_once 'controleur/acceuil.php'; 
            break;
    }
}


?>