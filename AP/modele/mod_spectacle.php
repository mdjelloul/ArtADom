<?php

function get_spectacles()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * 
                          FROM spectacle JOIN artiste
                          ON spectacle.idArtiste = artiste.idArtiste
                          JOIN public 
                          ON public.idPublic = spectacle.idPublic
                          ORDER BY intitSpectacle,photoSpectacle,pseudoArtiste,libPublic ");
	$req->execute();
    $spectacles = $req->fetchAll();
        
    return $spectacles;
}


function get_detailSpec($idSpectacle)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * 
                          FROM spectacle JOIN artiste
                          ON spectacle.idArtiste = artiste.idArtiste
                          JOIN public 
                          ON public.idPublic = spectacle.idPublic
                          WHERE idSpectacle=$idSpectacle
                        
                          ");

	$req->execute();
    $detailSpec = $req->fetch();
        
    return $detailSpec;
}