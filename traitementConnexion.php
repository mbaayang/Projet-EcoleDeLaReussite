<?php 
error_reporting(E_ALL);
    session_start(); // Démarrage de la session
    require_once 'connect.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['passwords'])) // Si il existe les champs email, password et qu'il sont pas vident
    {

        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['passwords']);
        
        $email = strtolower($email); // email transformé en minuscule
        // On regarde si l'utilisateur est inscrit dans la table personnes
        
        $check = $bdd->prepare('SELECT email, passwords, statut FROM personnes WHERE email =:email AND passwords=:passwords');
        $check->bindParam(":email", $email);
        $check->bindParam(":passwords", $password);
        $check->execute();

        $data = $check->fetch();
        $row = $check->rowCount();
        
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if($password == $data["passwords"])
                {
                    $pass_hash= password_hash($password, PASSWORD_DEFAULT);

                    // On créer la session et on redirige 

                    $_SESSION['user'] = $data['pseudo'];
                    if($data['statut'] =='admin'){
                        header('Location: espaceAdmin.php');
                        die();
                    }elseif($data['statut'] =='professeur'){
                        header('Location: pageProf.php');
                        die();
                    }elseif($data['statut'] =='surveillant'){
                        header('Location: pageSurveillant.php');
                        die();
                    }else{
                        header('Location: pageComptable.php');
                        die();
                    }
                 }else{ header('Location: connexion.php?login_err=passwords'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }else{ header('Location: connexion.php'); die();} // si le formulaire est envoyé sans aucune données


    ?>
