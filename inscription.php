
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
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="formulaire.css">
<title>Document</title>
</head>
<body>

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