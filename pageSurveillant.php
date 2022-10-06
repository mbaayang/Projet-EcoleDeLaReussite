<?php
session_start();
require_once 'connect.php'; // ajout connexion bdd 
// si la session n'existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:connexion.php');
    die();
}

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM infos_connexion WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace professeur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <div class="container">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="liste_eleves.php"> Liste des élèves</a></li>
                        <li class="list-group-item"><a href=""> Emploi du temps</a></li>
                        <li class="list-group-item"><a href=""> Notes</a></li>
                    </ul>
                </div>
                <hr />
                <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
            </div>
        </div>
    </div>



    <?php
    include('footer.php');
    ?>
</body>

</html>