<!-- code PHP -->
<?php
include 'connect.php';
if(isset($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['statut'],$_POST['passwords'],$_POST['sexe'],$_POST['email'],$_POST['tel'],$_POST['salaire'])){
    $pseudo=$_POST['pseudo'];	
	$nom=$_POST['nom'];	
    $prenom=$_POST['prenom'];	
    $statut=$_POST['statut'];
    $passwords=$_POST['passwords'];	
    $sexe=$_POST['sexe'];	
	$tel=$_POST['tel'];	
	$email=$_POST['email'];	
	$salaire=(int)$_POST['salaire'];	
    $id=$_GET['updateid'];	
 
    $stmtAjoutPersonne=$bdd->prepare("UPDATE personnes SET pseudo='$pseudo',nom='$nom',prenom='$prenom',statut='$statut',passwords='$passwords',sexe='$sexe',email='$email',tel='$tel',salaire=$salaire WHERE id='$id'");
    $stmtAjoutPersonne->execute();
    if($stmtAjoutPersonne){
        header('location:pageEmployes.php');
    }else { die('Erreur : '.$e->getMessage());}
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Ajout employes</title>
  </head>
  <body>
  <?php
    include('header.php');
    ?>
    <div class="container my-5 w-50">
    <form method="POST" action="">
        <div class="mb-3">
            <label >Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder=" Pseudo" autocomplete="on"  >
        </div>
        <div class="mb-3">
            <label >Nom</label>
            <input type="text" class="form-control" name="nom" placeholder=" Nom" autocomplete="on" >
        </div>
        <div class="mb-3">
            <label >Prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder=" Prenom" autocomplete="on" >
        </div>

        <div class="mb-3">
            <label >Statut</label>
            <input type="text" class="form-control" name="statut" placeholder=" statut" autocomplete="on" >
        </div>

        <div class="mb-3">
            <label >Password</label>
            <input type="text" class="form-control" name="passwords" placeholder=" Password" autocomplete="on" >
        </div>

        <div class="mb-3">
            <label >Sexe</label>
            <input type="text" class="form-control" name="sexe" placeholder=" Sexe" autocomplete="on" >
        </div>

        <div class="mb-3">
            <label >Email</label>
            <input type="text" class="form-control" name="email" placeholder=" Email" autocomplete="on" >
        </div>
        <div class="mb-3">
            <label >Num??ro de t??l??phone</label>
            <input type="text" class="form-control" name="tel" placeholder=" tel" autocomplete="on" >
        </div>
        <div class="mb-3">
            <label >Salaire</label>
            <input type="text" class="form-control" name="salaire" placeholder=" Salaire" autocomplete="on" >
        </div>


  <button type="submit" class="btn btn-primary btn-block" name="submit">Modifier</button>
</form>
    </div>
    <?php
    include('footer.php');
    ?>
  </body>
</html>