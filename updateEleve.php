<!-- code PHP -->
<?php
include 'connect.php';

if(isset($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['dateNaissance'],$_POST['lieuNaissance'],$_POST['sexe'],$_POST['tel'],$_POST['niveau'])){
    $pseudo=$_POST['pseudo'];	
	$nom=$_POST['nom'];	
    $prenom=$_POST['prenom'];	
    $dateNaissance=$_POST['dateNaissance'];
    $lieuNaissance=$_POST['lieuNaissance'];	
    $sexe=$_POST['sexe'];	
	$tel=$_POST['tel'];	
	$niveau=$_POST['niveau'];

    $id=$_GET['updateid'];  //stoque dans id le id recupèré dans l'url

    $stmtAjoutPersonne=$bdd->prepare("UPDATE personnes SET pseudo='$pseudo',nom='$nom',prenom='$prenom',dateNaissance='$dateNaissance',lieuNaissance='$lieuNaissance',statut='Elève',sexe='$sexe',tel='$tel',niveau='$niveau' WHERE id='$id'");
    $stmtAjoutPersonne->execute();
    if($stmtAjoutPersonne){
        header('location:pageEleve.php');
    }else { die('Erreur : '.$e->getMessage());}
}else {echo "Veuiller modifier les champs concernés";}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Ajout élève</title>
  </head>
  <body>
    <div class="container my-5 ">
    <form method="POST" action="">
        <div class="mb-3">
            <label >Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder=" pseudo" autocomplete="on" required >
        </div>
        <div class="mb-3">
            <label >Nom</label>
            <input type="text" class="form-control" name="nom" placeholder=" Nom" autocomplete="on" required>
        </div>
        <div class="mb-3">
            <label >Prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder=" Prenom" autocomplete="on" required>
        </div>
        <div class="mb-3">
            <label >date de naissance</label>
            <input type="Date" class="form-control" name="dateNaissance" placeholder=" date de naissance" autocomplete="on" required>
        </div>

        <div class="mb-3">
            <label >Lieu de naissance</label>
            <input type="text" class="form-control" name="lieuNaissance" placeholder=" lieu de naissance" autocomplete="on" required>
        </div>

        <div class="mb-3">
            <label >Sexe</label>
            <input type="text" class="form-control" name="sexe" placeholder=" Sexe" autocomplete="on" required>
        </div>
        <div class="mb-3">
            <label >Numéro de téléphone du tuteur</label>
            <input type="text" class="form-control" name="tel" placeholder=" tel" autocomplete="on" required>
        </div>
        <div class="mb-3">
            <label >Niveau</label>
            <input type="text" class="form-control" name="niveau" placeholder=" Niveau" autocomplete="on" required>
        </div>

  <button type="submit" class="btn btn-primary btn-block"name="submit">Modifier</button>
</form>
    </div>
  </body>
</html>