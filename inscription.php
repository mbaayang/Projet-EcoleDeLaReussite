<?php
    require_once 'connect.php'; // On inclu la connexion à la bdd

//Traitement de formulaire
if (isset($_POST["submit"])) {
    
        //On recupére les données en les protégeants
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $statut = htmlspecialchars($_POST["statut"]);
        $passwords = htmlspecialchars($_POST["passwords"]);
        $sexe = htmlspecialchars($_POST["sexe"]);
        $tel = htmlspecialchars($_POST["tel"]);
        $email = htmlspecialchars($_POST["email"]);

        //On écrit la requete
        $sql = 'INSERT INTO personnes (pseudo, prenom, nom, statut, passwords, sexe, tel, email)
        VALUES (:pseudo, :prenom, :nom, :statut, :passwords, :sexe, :tel, :email)';

        //On prepare la requete
        $query = $bdd->prepare($sql);

        //On injecte les valeurs
        $query->bindParam(':pseudo', $pseudo);
        $query->bindParam(':prenom', $prenom);
        $query->bindParam(':nom', $nom);
        $query->bindParam(':statut', $statut);
        $query->bindParam(':passwords', $passwords);
        $query->bindParam(':sexe', $sexe);
        $query->bindParam(':tel', $tel);
        $query->bindParam(':email', $email);

        //On execute la requete
        $query->execute();

        // On redirige avec le message de succès
        header('Location:inscription.php?reg_err=success');
        die();
    }
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
    <title>Inscription</title>
    <link rel="stylesheet" href="formulaire.css">
    <title>Ajout employés</title>
</head>

<body>
    <div class="login-form">
    <?php
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);
        if($err = 'success')
        {
            ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> inscription réussie !
                </div>
            <?php

        }
    }
    ?>     
        <form action="" method="post">
            <h2 class="text-center">Ajout employés</h2>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="statut">Statut</label>
                <input type="text" name="statut" class="form-control" placeholder="Statut" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="passwords">Password</label>
                <input type="password" name="passwords" class="form-control" placeholder="Password" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <input type="text" name="sexe" class="form-control" placeholder="Sexe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="tel" name="tel" class="form-control" placeholder="Téléphone" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Ajouter</button>
            </div>
        </form>
    </div>
    <script src="la_reussite.js"></script>
</body>

</html>