<?php
function envoiMessage($Nom, $Pnom, $Mail, $Tel = null, $CP, $objet, $Msg){
    global $bdd;
    $date = date("Y/m/d"); //'YYYY/mm/dd'

    $req = $bdd->prepare("INSERT INTO contact 
        (`idContact`, `nomCont`, `prenomCont`, `mailCont`, `telCont`, `codePostalCont`, `objetCont`, `messageCont`, `dateCont`)
        VALUES (?,?,?,?,?,?,?,?,?)");
    $req->execute([null,$Nom,$Pnom,$Mail,$Tel,$CP,$objet,$Msg,$date]);

}