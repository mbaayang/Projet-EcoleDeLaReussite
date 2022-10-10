
<?php

require_once 'connect.php';

// Vérifier si le formulaire est soumis 
if ( isset( $_POST['submit'] ) ) {

 /* récupérer les données du formulaire en utilisant 
    la valeur des attributs name comme clé 
   */
  $pseudo=$_POST['pseudo'];
  $nom = $_POST['nom']; 
 $prenom = $_POST['prenom']; 
 $statut=$_POST['statut'];
 $passwords=$_POST['passwords'];
 $sexe=$_POST['sexe'];
 $email=$_POST['email'];
 $tel=$_POST['tel'];
 



$var=$bdd->query("INSERT INTO personnes(pseudo,prenom,nom,statut,passwords,sexe,email, tel) VALUES('".$pseudo."','".$prenom."','".$nom."','".$statut."','".$passwords."','".$sexe."','".$email."','".$tel."')");

}

?>

                        


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="formulaire.css">
<title>Document</title>
</head>
<body>

<<<<<<< HEAD
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="la_reussite.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
            <title>Inscription</title>
        </head>
        <body>
        <div class="login-form">
            <?php 
               
                ?>
            
            <form action="traitement_ins_employes.php" method="post">
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
=======
<p><strong> FORMULAIRE D'INSCRIPTION</strong></p>
<div id="form">
<form action="" method="post" id="loginform" enctype="multipart/form-data"> 
<label for="name"><strong>pseudo</strong> </label><br>
<input type="text" value="" placeholder="pseudo" id="class1" name="pseudo"><br>   

<label for="name"><strong>prenom</strong> </label><br>
<input type="text" value="" placeholder="prenom" id="class1" name="prenom"><br>

<label for="name"><strong>Nom</strong> </label><br>
<input type="text" value="" placeholder="nom" id="class1" name="nom"><br> 

<label for="statut"><strong>statut</strong> </label><br>
<input type="text" value="" placeholder="statut" id="class1" name="statut"><br>

<label for="name"><strong>passwords</strong> </label><br>
<input type="name" value="" placeholder="mdp" id="class1" name="passwords"><br>

 <label for="name"><strong>sexe</strong> </label><br>
<input type="name" value="" placeholder="sexe" id="class1" name="sexe"><br>
<label for="name"><strong>email</strong> </label><br>
<input type="email" value="" placeholder="email" id="class1" name="email"><br>
<label for="name"><strong>Tel</strong> </label><br>
<input type="text" value="" placeholder="tel" id="class1" name="tel"><br>

    <input type="submit" value="ENVOYER" onclick="" id="bouton" name="submit">
</form>
</body>
</html>
>>>>>>> zou
