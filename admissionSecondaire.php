<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>
    <title>Admission primaire</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <main>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Condition d'admission</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in laborum voluptatibus non at,
                            doloribus, iste eum dignissimos numquam iusto consequatur, sed expedita veniam nulla quas eveniet corporis
                            architecto inventore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi quos ullam neque eveniet
                            autem itaque consectetur esse at, vitae omnis eligendi sit ab praesentium minima repudiandae natus harum, impedit dolor!</p>
                        <a href="#" class="btn btn-primary">Plus d'infos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Frais d'inscription</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem corporis saepe debitis perferendis
                            dolorem repellendus dolor asperiores sapiente. Aliquam distinctio molestias ullam in unde animi autem maxime dicta officia.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nihil mollitia earum, itaque cumque illum reprehenderit? Aspernatur illo esse voluptate.
                            Laudantium dolores dolor voluptas nisi consequuntur.</p>
                        <a href="#" class="btn btn-primary">Plus d'infos</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('footer.php');
    ?>

    <style>
        .row{
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding: 40px;
        }
        .col-sm-6{
            padding: 20px;
        }
    </style>
    <script src="laReussite.js"></script>
</body>

</html>