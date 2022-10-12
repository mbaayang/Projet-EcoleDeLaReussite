<?php
// Se connecter à la base de données

try 
{
    $bdd = new PDO("mysql:host=localhost;dbname=ecole_de_la_reussite;charset=utf8", "root", "");
}
catch(PDOException $e)
{
    die('Erreur : '.$e->getMessage());
}


?>