
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
    
     $prenom = $_POST['prenom']; 
     $nom = $_POST['nom']; 
     $naissance=$_POST['naissance'];
     $lieu=$_POST['lieu'];
     $adresse=$_POST['adresse'];
     $tel=$_POST['tel'];
   /*   $pseudo=$_POST['pseudo']; */
     $email=$_POST['email'];
   /*   $mot_de_passe=$_POST['mot_de_passe']; */
     $statut=$_POST['statut'];
     
require_once'connect.php';
$var=$bdd->query("INSERT INTO employes(prenom,nom, date_de_naissance, lieu_de_naissance, adresse, tel,,email,,statut) VALUES ('".$prenom."','".$nom."','".$naissance."','".$lieu."','".$adresse."','".$tel."','".$email."','".$statut."')");
 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>

<p><strong> FORMULAIRE D'INSCRIPTION</strong></p>
<div id="form">
    <form action="" method="post" id="loginform" enctype="multipart/form-data">     
    <label for="name"><strong>prenom</strong> </label><br>
    <input type="text" value="" placeholder="prenom" id="class1" name="prenom"><br>
    <label for="name"><strong>Nom</strong> </label><br>
    <input type="text" value="" placeholder="nom" id="class1" name="nom"><br> 
    <label for="name"><strong>date de naissance</strong> </label><br>
    <input type="name" value="" placeholder="date_de_naissance" id="class1" name="naissance" ><br>
    <label for="name"><strong>lieu_de_naissance</strong> </label><br>
    <input type="name" value="" placeholder="lieude_naissance" id="class1" name="lieu" ><br>
    <label for="name"><strong>Adresse</strong> </label><br>
    <input type="text" value="" placeholder="adresse" id="class1" name="adresse"><br>
    <label for="name"><strong>Tel</strong> </label><br>
    <input type="text" value="" placeholder="tel" id="class1" name="tel"><br>
  <!--   <label for="name"><strong>pseudo</strong> </label><br>
    <input type="name" value="" placeholder="pseudo" id="class1" name="pseudo"><br> -->
    <label for="name"><strong>email</strong> </label><br>
    <input type="email" value="" placeholder="email" id="class1" name="email"><br>
  <!--   <label for="name"><strong>mdp</strong> </label><br>
    <input type="name" value="" placeholder="mdp" id="class1" name="mot_de_passe"><br> -->
    <label for="name"><strong>statut</strong> </label><br>
    <input type="name" value="" placeholder="statut" id="class1" name="statut"><br>
        <input type="submit" value="ENVOYER" onclick="" id="bouton" name="submit">
    </form>
</body>
</html>