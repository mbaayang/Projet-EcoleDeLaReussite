<?php
 include ('connect.php'); // On inclu la connexion à la bdd
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
            
            <form action="traitement_ins_employes.php" method="post">
                <h2 class="text-center">Inscription des élèves</h2>   
                <div class="form-group">
                    <label for="statut">Prenom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="statut">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="date" name="date_de_naissance" class="form-control" placeholder="Date de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lieu_de_naissance">Lieu de naissance</label>
                    <input type="text" name="lieu_de_naissane" class="form-control" placeholder="Lieu de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="tel" name="tel" class="form-control" placeholder="Téléphone" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau</label>
                    <input type="text" name="niveau" class="form-control" placeholder="Niveau" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscrire</button>
                </div>   
            </form>
        </div>
        <script src="la_reussite.js"></script>
    </body>
</html>
