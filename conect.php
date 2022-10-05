<?php
session_start();
try{
    $connect=new PDO("mysql:host=localhost;dbname=ecole_de_la_reussite;charset=utf8","root", "");
    $connect->  setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
    
}catch(Exception $e){
    die("erreur de connexion".$e->getMessage());
}

?> 