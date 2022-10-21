<?php
function get_3spectacles(){
    global $bdd;

    $req = $bdd->prepare("SELECT S.*, A.pseudoArtiste FROM spectacle S JOIN artiste A on S.idArtiste = A.idArtiste WHERE idSpectacle = 1 OR idSpectacle = 3 OR idSpectacle = 4 order by idSpectacle");
    $req->execute();
    $spectacles = $req->fetchAll();

    return $spectacles;
}

