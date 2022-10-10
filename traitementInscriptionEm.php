<?php 
    require_once 'connect.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['passwords']) && !empty($_POST['passwords_retype']))
    {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['passwords']);
        $password_retype = htmlspecialchars($_POST['passwords_retype']);

        // On vérifie si l'utilisateur existe
<<<<<<< HEAD:traitementInscriptionEm.php
        $check = $bdd->prepare('SELECT pseudo, email, password FROM infos_connexion WHERE email = ?');
=======
        $check = $bdd->prepare('SELECT pseudo, email, passwords FROM personnes WHERE email = ?');
>>>>>>> baa6ad02cac3d704f808b3c9f661b4e7d62cbda8:traitement_ins_employes.php
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($passwords === $passwords_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $passwords = password_hash($passwords, PASSWORD_BCRYPT, $cost);

                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 
                            
                            // On insère dans la base de données
<<<<<<< HEAD:traitementInscriptionEm.php
                            $insert = $bdd->prepare('INSERT INTO infos_connexion(pseudo, email, password, ip, token) VALUES(:pseudo, :email, :password, :ip, :token)');
=======
                            $insert = $bdd->prepare('INSERT INTO personnes(pseudo, email, passwords) VALUES(:pseudo, :email, :passwords)');
>>>>>>> baa6ad02cac3d704f808b3c9f661b4e7d62cbda8:traitement_ins_employes.php
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'passwords' => $password,
                                'ip' => $ip,
                                'token' => bin2hex(openssl_random_pseudo_bytes(64))
                            ));
                            // On redirige avec le message de succès
<<<<<<< HEAD:traitementInscriptionEm.php
                            header('Location:inscriptionEmployes.php?reg_err=success');
                            die();
                        }else{ header('Location: inscriptionEmployes.php?reg_err=password'); die();}
                    }else{ header('Location: inscriptionEmployes.php?reg_err=email'); die();}
                }else{ header('Location: inscriptionEmployes.php?reg_err=email_length'); die();}
            }else{ header('Location: inscriptionEmployes.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscriptionEmployes.php?reg_err=already'); die();}
=======
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=passwords'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
>>>>>>> baa6ad02cac3d704f808b3c9f661b4e7d62cbda8:traitement_ins_employes.php
    }
