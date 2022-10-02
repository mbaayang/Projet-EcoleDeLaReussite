<?php
// Se connecter à la base de données

$serveur = "localhost";
$login = "root";
$pass = "";

try{
    $bdd = new PDO("mysql:host=$serveur;dbname=ecole_de_la_reussite;charset=utf8", $login, $pass);

}
catch(PDOException $e){
    die('Erreur'.$e->getMessage());
    
}

?>