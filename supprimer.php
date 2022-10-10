<?php
<<<<<<< HEAD
require_once('connect.php');
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $req=$bdd->prepare("UPDATE eleves SET archiver=1 WHERE id=?");//code pour archiver en changeant la valeur 0 par 1
=======
require_once 'connect.php';
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $req=$bdd->prepare("UPDATE personnes SET archiver=1 WHERE id=?");//code pour archiver en changeant la valeur 0 par 1
>>>>>>> baa6ad02cac3d704f808b3c9f661b4e7d62cbda8
 $req->execute(array($id));
 if($req){
    echo "suppresion effectuée";
 }
}
<<<<<<< HEAD
=======


>>>>>>> baa6ad02cac3d704f808b3c9f661b4e7d62cbda8
?>