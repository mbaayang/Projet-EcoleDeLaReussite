<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des eleves</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
</head>
<style>

    td,th {
        border: 1px solid black;
        border-collapse: collapse;
    }
    h4{
        text-align: center;
        margin-top: 20px;
    }
</style>
<body>

    <?php
        include('header.php')
    ?>
    
    <body>
    <h4>Liste des élèves</h4>
    <table>
        <th>ID</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Lieu de naissance</th>
        <th>Adresse</th>
        <th>Niveau</th>
        <th>Action</th>

        <?php
        require_once 'connect.php';

        $req = $bdd->query("SELECT * FROM eleves");
        while ($aff = $req->fetch()) {
            if ($aff['archiver'] == 0) {

        ?>

                <tr>
                    <td> <?php echo $aff['id'] ?></td>
                    <td> <?php echo $aff['prenom']; ?> </td>
                    <td> <?php echo $aff['nom']; ?> </td>
                    <td> <?php echo $aff['date_de_naissance']; ?></td>
                    <td> <?php echo $aff['lieu_de_naissance']; ?></td>
                    <td> <?php echo $aff['adresse']; ?></td>
                    <td> <?php echo $aff['niveau']; ?></td>
                    <td>
                        <a href="modifier.php?id=<?php echo $aff['id'] ?> ">Modifier</a>
                        <a href="supprimer.php?id=<?php echo $aff['id'] ?>">Supprimer</a>
                    </td>
                </tr>
        <?php 
        }
        } ?>
    </table>


    <?php
    include('footer.php')
    ?>
</body>
</html>