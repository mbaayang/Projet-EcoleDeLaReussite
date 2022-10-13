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
}

?>


<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>

    <title>Ajout élève</title>
  </head>
  <body>
  <?php
    include('header.php');
    ?>
   <div class="container my-5 w-50 bg-light">
        <form class="row g-3" method="POST" action="addEleve.php">
            <div><h2>Modifier</h2></div>
            <div class="col-md-6">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" placeholder=" Pseudo" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="sexe" class="form-label">Sexe</label>
                <select name="sexe" id="sexe" class="form-select">
                    <option selected>Choisir</option>
                    <option value="">H</option>
                    <option value="">F</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder=" Prenom" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder=" Nom" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="dateNaissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="dateNaissance" placeholder=" date de naissance" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="lieuNaissance" class="form-label">Lieu de naissance</label>
                <input type="text" class="form-control" name="lieuNaissance" placeholder=" lieu de naissance" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Numéro de téléphone du tuteur</label>
                <input type="text" class="form-control" name="tel" placeholder=" tel" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="niveau" class="form-label">Niveau</label>
                <input type="text" class="form-control" name="niveau" placeholder=" Niveau" autocomplete="on" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
            </div>            
        </form>
    </div>
    <?php
    include('footer.php');
    ?>
  </body>
</html>