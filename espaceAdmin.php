<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="la_reussite.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Espace Admin</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body style="background-color:white;">
<?php
    include('header.php');
    ?>
  <h1>Bonjour</h1>
  <header style="background-color:  #2C22B8;">
    <div id="partie0">
      <!--            <div ><i class="fa-solid fa-star"></i>&nbsp;<a href="afficher.php" id="class2" ><span>lister les EMPLOYES</span></a></div><br> -->
      <div id="class2"><i class="fa-solid fa-burger" id="class1"></i>&nbsp;<a href="pageEmployes.php"><span>ajouter employes</span></a></div>&nbsp;
      <div id="class2"><i class="fa-solid fa-anchor"></i>&nbsp;<a href="pageEleve.php"><span>ajouter eleves</span></a></div> &nbsp;
      <!--           <div id="class2"><a href="affichereleve.php">lister eleves</a></div>  -->
    </div>
  </header>


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