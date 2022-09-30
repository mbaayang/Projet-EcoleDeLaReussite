<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole de la réussite</title>
</head>
<body>
<!-- CODE PHP -->
<?php
//////////// la connection à la base de données////////////////

//identifiant de la base de données
    $servername='localhost';
    $username='root';
    $password='766021841Fall';
    $dbname='ecole_de_la_reussite';
//connexion à la base
    try{
        $conn=new PDO("mysql:host=$servername,bdname= $dbname",$username,  $password);
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "la connexion a été bien établie.";
        echo "bon";
    }
    catch(PDOException $e){
        echo "la connexion a échoué :" . $e->getMessage();
    }
//ajout formulaire à la base
    if (isset($_POST['envoyer'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['tel'];
        // echo "oui", $nom, $prenom,$tel;
        $sql=("INSERT INTO personne(nom, prenom, tel) VALUES (:nom,:prenom,:tel)");
       
        $stmt=$conn->prepare($sql);
        //lier des variables à une requête MySQL préparée par mysqli_prepare().
        $stmt.bindParam(':nom',$nom);
        $stmt.bindParam(':prenom',$prenom);
        $stmt.bindParam(':tel',$tel);
        $stmt.execute();
    }
?>

<div id="content_autre">
        <div class="div_form">
            <form action="" method="POST" id="formulaire_contact" >
                <fieldset form="formulaire_contact">
                    <legend>FORMULAIRE DE CONTACT</legend><br>
                    <label for="prenom" id="prenom">Prénom * :</label><br>
                    <input type="text"  id="champ_prenom" name="prenom" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="prenom_manquant"></span><br>
    
                    <label for="nom">Nom * :</label><br>
                    <input type="text"  id="champ_nom" name="nom" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="nom_manquant"></span><br>
    
                    <label for="telephone">Telephone * :</label><br>
                    <input type="text" id="champ_tel" name="tel" required pattern="^[[+]+[0-9]]+[0-9]?" maxlength="20">      <span id="tel_manquant"></span><br>
    
                </fieldset>
                <input type="submit" value="Envoyer" name="envoyer" class="bouton2">
            </form>
        </div>
    </div>
   
</body>
</html>