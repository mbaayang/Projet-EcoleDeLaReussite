<!-- code PHP -->
<?php
include 'connect.php';

if(isset($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['dateNaissance'],$_POST['lieuNaissance'],$_POST['sexe'],$_POST['tel'],$_POST['niveau'],)){
    $pseudo=$_POST['pseudo'];	
	$nom=$_POST['nom'];	
    $prenom=$_POST['prenom'];	
    $dateNaissance=$_POST['dateNaissance'];
    $lieuNaissance=$_POST['lieuNaissance'];	
    $sexe=$_POST['sexe'];	
	$tel=$_POST['tel'];	
	$niveau=$_POST['niveau'];
    $sql= "SELECT matricule from personnes";
    $mat;
    $res = $bdd->query($sql);
    if($res->rowCount()>0){
        $matricules = $res->fetchAll();
        $matricule = $matricules[count($matricules) - 1]['matricule'];
        $increment = (int) explode("/", $matricule)[1]+1;
        $mat = "FDG_2022/$increment";
    }

    $stmtAjoutPersonne=$bdd->prepare("INSERT INTO personnes(pseudo,nom,prenom,dateNaissance,lieuNaissance,statut,sexe,tel,niveau,matricule) VALUES ('$pseudo','$nom','$prenom','$dateNaissance','$lieuNaissance','Elève','$sexe','$tel','$niveau','$mat')");
    $stmtAjoutPersonne->execute();
    if($stmtAjoutPersonne){
        header('location:pageEleve.php');
    }else { die('Erreur : '.$e->getMessage());}
}

?>


<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Ajout élève</title>
  </head>
  <body>
  <?php
    include('header.php');
    ?>
    <div class="container my-5 w-50 bg-light">
        <form class="row g-3" method="POST" action="addEleve.php">
            <div><h2>Inscrire un éléve</h2></div>
            <div class="col-md-6">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" placeholder=" Pseudo" autocomplete="on" required>
            </div>
            <div class="col-md-6">
                <label for="sexe" class="form-label">Sexe</label>
                <select name="sexe" id="sexe" class="form-select">
                    <option selected>Choisir</option>
                    <option  value="H">H</option>
                    <option  value="F">F</option>
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
                <select name="niveau" id="niveau" class="form-select">
                <option selected>Choisir</option>
                <option value="CI">CI</option>
                <option value="CP">CP</option>
                <option value="CE1">CE1</option>
                <option value="CE2">CE2</option>
                <option value="CM1">CM1</option>
                <option value="CM2">CM2</option>
                <option value="6e">6e</option>
                <option value="5e">5e</option>
                <option value="4e">4e</option>
                <option value="3e">3e</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit">Inscrire</button>
            </div>            
        </form>
    </div>
    <?php
    include('footer.php');
    ?>
  </body>
</html>