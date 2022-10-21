<?php

if (!isset($_GET['check']) || $_GET['check'] != 'true') {
    echo "

<div class='content'>
    <center>
        <h1>
            Contacter le collectif
        </h1>
        <form method='post' action='index.php?section=contact&check=true'>
        <table class='table-bordered table-active'>
            <tr>
                <th>Nom*</th>
                <td><input type='text' name='nom' required></td>
            </tr>
            <tr>
                <th>Prénom*</th>
                <td><input type='text' name='pnom' required></td>
            </tr>
            
            <tr>
                <th>E-mail*</th>
                <td colspan='3'><input type='email' size='61%' name='mail' required></td>
            </tr>
            
            <tr>
                <th>Téléphone</th>
                <td><input type='tel' pattern='[0-9]{10}' minlength='10' maxlength='10' name='tel'></td>
            </tr>
            <tr>
                <th>Code postal*</th>
                 <td><input type='text' pattern='[0-9]{5}' minlength='5' maxlength='5' name='CP' required></td>
            </tr>
            <tr>
                <th>Objet*</th>
                <td><input type='text' name='objet' required></td>
            <tr>
                <th>Message*</th>
                <td colspan='3'><textarea name='message' cols='63' rows='10' required></textarea></td>
            </tr>
            
            <tr>
                <td><small>* champs obligatoires</small>
                <input type='submit' value='Envoyer'></td>    
            </tr>
        </table>
    </form>
    </center>
</div>
    ";
}
elseif ($_GET['check'] == "true") {
    echo "
<div class='content'>
<center>
    <h1>
       Votre message a bien été envoyé
    </h1>
</center>
    ";

    envoiMessage($_POST['nom'],$_POST['pnom'],$_POST['mail'],$_POST['tel'],$_POST['CP'],$_POST['objet'] ,$_POST['message']);
    header("Refresh:5; url=index.php");
}

?>
