<!DOCTYPE html>
<html lang="en">
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
    <p>bonjour prof</p>
    <div id="class2"><a href="listerEleve.php"><span>liste eleves</span></a></div> &nbsp;
    <div class="container">
    <div class="col-md-12">
      <div class="text-center">
        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>        
      </div>
    </div>
  </div>
    <?php
    include('footer.php');
    ?>

</body>
</html>