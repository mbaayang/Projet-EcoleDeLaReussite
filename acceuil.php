<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole de la Reussite</title>
    <link rel="stylesheet" href="laReussite.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #2C22B8;">
    <header>
    <?php
    include('header.php');
    ?>
    </header> 

    <main>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8">
                    <img name="slide">
                </div>
                <div class="col-sm-4">
                <h3>À propos de nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ad corrupti fugit praesentium. Culpa, minima repudiandae quas mollitia autem doloribus similique
                    illum,
                    necessitatibus non asperiores rerum, temporibus suscipit dolores! Aliquam, aperiam.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro placeat quidem voluptates numquam eius ducimus suscipit nihil, ad optio maxime commodi,
                    adipisci amet? Ea sunt debitis dolore facilis dolorem officiis?
                </p>
                </div>
            </div>
        </div>
    </main>
    <style>
        .col-sm-4 {
            background-color: #05006B;
            border-radius: 5px;
            margin-top: 40px; 
        } 
        .col-sm-8 img {
            height: 400px;
            width: 650px;
            border-radius: 5px;
            margin-top: 40px;
        }

        .col-sm-4 h3,
        .col-sm-4 p {
            text-align: center;
            color: #fff;
            padding: 5px;
        } 
    </style>
   <?php
    include('footer.php');
    ?>

    <script src="laReussite.js"></script>
</body>

</html>