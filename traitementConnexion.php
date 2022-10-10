<?php 
error_reporting(E_ALL);
    session_start(); // Démarrage de la session
    require_once 'connect.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['passwords'])) // Si il existe les champs email, password et qu'il sont pas vident
    {

        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['passwords']);
     /*    $statut=  htmlspecialchars($_POST['statut']); */
        
        $email = strtolower($email); // email transformé en minuscule
        // On regarde si l'utilisateur est inscrit dans la table employes
        
        $check = $bdd->prepare('SELECT email, passwords, statut FROM personnes WHERE email =:email AND passwords=:passwords');
        $check->bindParam(":email", $email);
        $check->bindParam(":passwords", $password);
        // $check->bindParam(":statut", $statut);
        $check->execute();
        
        // var_dump($email,$password);die;

        $data = $check->fetch();
        $row = $check->rowCount();
        
//         while ($a = $check->fetch()) {
//             # code...
//             var_dump($a);die;
//         }

//         die;
       
// var_dump($row);die;
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                // var_dump(!password_verify($password, $data['passwords']));die;
                if($password == $data["passwords"])
                {
                    // On créer la session et on redirige sur espace_employes.php
                    // var_dump($data);
                    $_SESSION['user'] = $data['token'];
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
                 }     
            
                else{ header('Location: connexion.php?login_err=passwords'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }else{ header('Location: connexion.php'); die();} // si le formulaire est envoyé sans aucune données


    ?>
