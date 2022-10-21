<?php

function get_artistes(){
    global $bdd;

    $req = $bdd->prepare('SELECT * FROM artiste');
    $req->execute();
    $artiste = $req->fetchAll();
    return $artiste;
}

function get_artiste(){
    global $bdd;

    $req = $bdd->prepare('SELECT * FROM artiste WHERE IdArtiste = ?');
    $req->execute([$_GET['id']]);

    $artiste = $req->fetch();
    return $artiste;
}
?>