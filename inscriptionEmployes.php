<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="laReussite.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
            <title>Inscription</title>
        </head>
        <body>
        <?php
        include('header.php');
        ?>

<?php

require_once 'connect.php';

// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) {

 /* récupérer les données du formulaire en utilisant 
    la valeur des attributs name comme clé 
   */
  $pseudo=$_POST['pseudo'];
 /*  $nom = $_POST['nom']; 
 $prenom = $_POST['prenom']; 
 $statut=$_POST['statut']; */
 $email=$_POST['email'];
 $passwords=$_POST['passwords'];
/*  $sexe=$_POST['sexe']; */
 
/*  $tel=$_POST['tel']; */
 



$var=$bdd->query("INSERT INTO personnes(pseudo,email,passwords,) VALUES('".$pseudo."','".$email."','".$passwords."')");

}
?>



        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'passwords':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="traitementInscriptionEm.php" method="post">
                <h2 class="text-center">Créer un compte</h2>       
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label for="email">Adresse mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>

              <!--   <div class="form-group">
                    <label for="email">TEL</label>
                    <input type="name" name="TEL" class="form-control" placeholder="tel" required="required" autocomplete="off">
                </div> -->

           <!--      <div class="form-group">
                <label for="passwords">statut</label><br>
                <input type="name" name="statut" class="form-control" placeholder="statut" required="required" autocomplete="off">
            </div>  -->

            <!-- div class="form-group">
                    <label for="passwords_retype">Sexe</label>
                    <input type="name" name="passwords_retype" class="form-control" placeholder="sexe" required="required" autocomplete="off">
                </div> -->

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="passwords" name="passwords" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="passwords_retype">Saisissez à nouveau le mot de passe</label>
                    <input type="passwords" name="passwords_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
    
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
            </form>
        </div>
        <?
        include('footer.php');
        ?>
        </body>
</html>