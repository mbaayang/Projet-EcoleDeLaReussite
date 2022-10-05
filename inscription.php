<?php
    require_once 'connect.php'; // On inclu la connexion à la bdd

//Traitement de formulaire
if (isset($_POST["submit"])) {
    
        //On recupére les données en les protégeants
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $date_de_naissance = htmlspecialchars($_POST["date_de_naissance"]);
        $lieu_de_naissance = htmlspecialchars($_POST["lieu_de_naissance"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $niveau = htmlspecialchars($_POST["niveau"]);

        //On écrit la requete
        $sql = 'INSERT INTO eleves (prenom, nom, date_de_naissance, lieu_de_naissance, adresse, niveau)
        VALUES (:prenom, :nom, :date_de_naissance, :lieu_de_naissance, :adresse, :niveau)';

        //On prepare la requete
        $query = $bdd->prepare($sql);

        //On injecte les valeurs
        $query->bindParam(':prenom', $prenom);
        $query->bindParam(':nom', $nom);
        $query->bindParam(':date_de_naissance', $date_de_naissance);
        $query->bindParam(':lieu_de_naissance', $lieu_de_naissance);
        $query->bindParam(':adresse', $adresse);
        $query->bindParam(':niveau', $niveau);

        //On execute la requete
        $query->execute();
    }

?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="la_reussite.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
            <title>Inscription</title>
        </head>
        <body>
        <div class="login-form">            
            <form action="" method="post">
                <h2 class="text-center">Inscription des élèves</h2>   
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="date" name="date_de_naissance" class="form-control" placeholder="Date de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lieu_de_naissance">Lieu de naissance</label>
                    <input type="text" name="lieu_de_naissance" class="form-control" placeholder="Lieu de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau</label>
                    <input type="text" name="niveau" class="form-control" placeholder="Niveau" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Inscrire</button>
                </div>   
            </form>
        </div>
        <script src="la_reussite.js"></script>
    </body>
</html>
