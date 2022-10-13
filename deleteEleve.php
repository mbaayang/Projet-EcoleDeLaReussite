<?php
include('connect.php');
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $datearchiver=date('y-m-d h:i:s');
    $req=$bdd->prepare("UPDATE personnes SET archiver=1,  dateArchiver='$datearchiver' WHERE id='$id'");//code pour archiver en changeant la valeur 0 par 1
    $req->execute();
    if($req){
       header('location:pageEleve.php');
    }
}
?>