
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="insription.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="la_reussite.css">
    <title>Ecole de la réussite</title>
</head>
<body>
<!-- CODE PHP -->
<?php
//////////// la connection à la base de données////////////////
include('header.php');
//identifiant de la base de données
    $servername='127.0.0.1';
    $username='root';
    $password='';
    $dbname='ecole_de_la_reussite_new';
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
        
        
        $sqlAjoutPersonne=("INSERT INTO employes(nom,prenom,tel,adresse,date_de_naissance,lieu_de_naissance) VALUES (:nom,:prenom,:tel,:adresse,:date_de_naissance,:lieu_de_naissance)");
        // mysql_query("INSERT INTO Eleve(niveau,pid) VALUES ('".$_POST['niveau']."','".mysql_insert_id() ."')") //renvoiyer les resultat du mysql au serveur web (mysql_query)
        $sqlAjoutEleve=("INSERT INTO eleves(niveau,pid) VALUES (:niveau,mysql_insert_id())");
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

        $stmtAjoutEleve->bindParam(':niveau',$niveau);
        $stmtAjoutEleve->execute();

?>
<div id="content_autre border border-primary">
        <div class="d-flex justify-content-center " >
            <form action="" method="POST">
                <h2 class="text-center">FORMULAIRE DE CONTACT</h2>       
                <div class="form-group">
                    <label for="pseudo">Prénom * :</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="nom">Nom * :</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone * :</label>
                    <input type="text" name="tel" class="form-control" placeholder="Téléphone" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse * :</label>
                    <input type="text" name="adresse" class="form-control" placeholder="Adresse" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="date_de_naissance">Date de naissance * :</label>
                    <input type="Date" name="date_de_naissance" class="form-control" placeholder="Date de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lieu_de_naissance">Lieu de naissance * :</label>
                    <input type="text" name="lieu_de_naissance" class="form-control" placeholder="Lieu de naissance" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="niveau">Niveau de l'éléve * :</label>
                    <input type="text" name="niveau" class="form-control" placeholder="Niveau de l'éléve" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="envoyer">Inscription</button>
                </div>  
            </form>
        </div>
    </div>
   <?php
   include('footer.php');
   ?>
</body>
</html>
