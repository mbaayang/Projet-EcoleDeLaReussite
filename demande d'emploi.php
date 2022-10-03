<?php
session_start();
try{
    $connect=new PDO("mysql:host=localhost;dbname=ecole_de_la_reussite;charset=utf8","root", "");
    $connect->  setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
    
}catch(Exception $e){
    die("erreur de connexion".$e->getMessage());
}

?> 
<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $prenom = $_POST['prenom']; 
     $nom = $_POST['nom']; 
     $tel = $_POST['tel'];
     $email=$_POST['email'];
     $adresse=$_POST['adresse'];
     $naissance=$_POST['naissance'];
     $lieu=$_POST['lieu'];
     $niveau=$_POST['niveau'];
     

$var=$connect->query("insert into Personne(nom, prenom,tel,email, adresse, date_de_naissance, lieu_de_naissance) values('".$nom."', '".$prenom."', '".$tel."','".$email."' '".$adresse."','".$naissance."','".$lieu."')");
 
  /*    if ($var) {
        $moi=$connect->query("select max(id) from Personne");
        $var1=$connect->query("insert into Eleve(niveau,pid) values('".$nom."', '".$prenom."', '".$tel."', '".$adresse."','".$email."','".$naissance."','".$lieu."')");
 
     } */
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="la_reussite.css">
    <title>Document</title>
</head>
<body>

<p><strong> FORMULAIRE DEMANDE D'EMPLOI</strong></p>
<div id="form">
    <form action="" method="post" id="loginform" enctype="multipart/form-data"> 
    <label for="name"><strong>Nom</strong> </label><br>
     <input type="text" value="" placeholder="nom" id="class1" name="nom"><br>     
    <label for="name"><strong>prenom</strong> </label><br>
    <input type="text" value="" placeholder="prenom" id="class1" name="prenom"><br>
    <label for="name"><strong>Tel</strong> </label><br>
    <input type="text" value="" placeholder="tel" id="class1" name="tel"><br>
    <label for="name"><strong>Email</strong> </label><br>
    <input type="text" value="" placeholder="Email" id="class1" name="email"><br>
    <label for="name"><strong>Adresse</strong> </label><br>
    <input type="text" value="" placeholder="adresse" id="class1" name="adresse"><br>
   <label for="name"><strong>date de naissance</strong> </label><br>
    <input type="name" value="" placeholder="date_de_naissance" id="class1" name="naissance" ><br>
    <label for="name"><strong>lieu_de_naissance</strong> </label><br>
    <input type="name" value="" placeholder="lieu_de_naissance" id="class1" name="lieu"><br>  
    <label for="name"><strong>Diplomee</strong> </label><br>
    <input type="name" value="" placeholder="diplomee" id="class1" name="diplome"><br> 
    <input type="submit" value="ENVOYER" onclick="" id="bouton" name="submit">
    </form>
</body>
</html>
