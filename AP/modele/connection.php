<?php 

require 'credentials.php';
try
{
 
    $bdd = new PDO('mysql:host=localhost;dbname=bddartadom2;charset=utf8',$user,$password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>