<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="insription.css">
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
        $conn=new PDO("mysql: host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "la connexion a été bien établie.";
    }
    catch(PDOException $e){
        echo "la connexion a échoué :" . $e->getMessage();
    }
//ajout formulaire à la base
    if (isset($_POST['envoyer'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['tel'];
        $adresse=$_POST['adresse'];
        $date_de_naissance=$_POST['date_de_naissance'];
        $lieu_de_naissance=$_POST['lieu_de_naissance'];
        $niveau=$_POST['niveau'];
        
        $sqlAjoutPersonne=("INSERT INTO Personne(nom,prenom,tel,adresse,date_de_naissance,lieu_de_naissance) VALUES (:nom,:prenom,:tel,:adresse,:date_de_naissance,:lieu_de_naissance)");
        $sqlAjoutEleve=("INSERT INTO Eleve(niveau) VALUES (:niveau)");
//Préparation de la requête     
        $stmtAjoutPersonne=$conn->prepare($sqlAjoutPersonne);
        $stmtAjoutEleve=$conn->prepare($sqlAjoutEleve);
//lier des variables à une requête MySQL préparée par mysqli_prepare().
        $stmtAjoutPersonne->bindParam(':nom',$nom);
        $stmtAjoutPersonne->bindParam(':prenom',$prenom);
        $stmtAjoutPersonne->bindParam(':adresse',$adresse);
        $stmtAjoutPersonne->bindParam(':tel',$tel);
        $stmtAjoutPersonne->bindParam(':date_de_naissance',$date_de_naissance);
        $stmtAjoutPersonne->bindParam(':lieu_de_naissance',$lieu_de_naissance);
        $stmtAjoutPersonne->execute();

        // $stmtAjoutEleve->bindParam(':niveau',$niveau);
        // $stmtAjoutEleve->execute();
        // $sqlRecuperationIDP=("SELECT id FROM Personne ");
        // $stmtRecuperationIDP=$conn->prepare($sqlRecuperationIDP);
        // $stmtRecuperationIDP->execute();
        // echo"$sqlRecuperationIDP";


    }
?>
<div id="content_autre">
        <div class="div_form">
            <form method="POST" id="formulaire_contact" >
                <fieldset form="formulaire_contact">
                    <legend>FORMULAIRE DE CONTACT</legend><br>
                    <label for="prenom" id="prenom">Prénom * :</label><br>
                    <input type="text"  id="champ_prenom" name="prenom" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="prenom_manquant"></span><br>
    
                    <label for="nom">Nom * :</label><br>
                    <input type="text"  id="champ_nom" name="nom" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="nom_manquant"></span><br>
    
                    <label for="telephone">Telephone * :</label><br>
                    <input type="text" id="champ_tel" name="tel" required pattern="^[[+]+[0-9]]+[0-9]?" maxlength="20">      <span id="tel_manquant"></span><br>
 
                    <label for="adresse" id="prenom">Adresse * :</label><br>
                    <input type="text"  id="champ_prenom" name="adresse" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="prenom_manquant"></span><br>
    
                    <label for="date_de_naissance">Date de naissance * :</label><br>
                    <input type="Date"  id="champ_nom" name="date_de_naissance" required pattern="^[a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ]+([a-zA-ZéèêîÏÊ][a-zA-ZéèêîÏÊ-\s])?" maxlength="20">      <span id="nom_manquant"></span><br>
    
                    <label for="lieu_de_naissance">Lieu de naissance * :</label><br>
                    <input type="text" id="champ_tel" name="lieu_de_naissance" required pattern="^[[+]+[0-9]]+[0-9]?" maxlength="20">      <span id="tel_manquant"></span><br>
                   
                    <label for="niveau">Niveau de l'éléve * :</label><br>
                    <input type="text" id="champ_tel" name="niveau" required pattern="^[[+]+[0-9]]+[0-9]?" maxlength="20">      <span id="tel_manquant"></span><br>

                </fieldset>
                <input type="submit" value="Envoyer" name="envoyer" class="bouton2">
            </form>
        </div>
    </div>
   
</body>
</html>