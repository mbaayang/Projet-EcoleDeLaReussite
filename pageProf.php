<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page professeur</title>
    <link rel="stylesheet" href="laReussite.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <header>
        <h1 class="p-5">Bonjour !</h1>
        <div class="card" style="width: 18rem; text-align: center;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="listerEleve.php">Liste des élèves</a></li>
                <li class="list-group-item"><a href="">Ajouter note</a></li>
                <li class="list-group-item"><a href="">Pointage</a></li>
            </ul>
        </div>
        <div style="margin: 25px;">
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
        </div>
    </header>

    <style>
        header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>   

    <?php
        include('footer.php');
    ?>
</body>
</html>