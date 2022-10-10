<?php
require_once 'connect.php';
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $req=$bdd->prepare("UPDATE personnes SET archiver=1 WHERE id=?");//code pour archiver en changeant la valeur 0 par 1
 $req->execute(array($id));
 if($req){
    echo "suppresion effectuée";
 }
}


?>