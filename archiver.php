<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="laReussite.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/431fa92df2.js" crossorigin="anonymous"></script>

    <title>liste des éléves archiver</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <table class="table">
  <thead>
    <tr> 
      <th scope="col">Identifiant</th>
      <th scope="col">Matricule</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">DateNaissance</th>
      <th scope="col">LieuNaissance</th>
      <th scope="col">Sexe</th>
      <th scope="col">Tel</th>
      <th scope="col">Niveau</th>
      <th scope="col">date_d'archivage</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt=$bdd->prepare('SELECT * FROM personnes where  archiver="1" and statut="Eléve"');
    $stmt->execute();
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
      $id=$row['id'];
      $mat=$row['matricule'];
      $pseudo=$row['pseudo'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $dateNaissance=$row['dateNaissance'];
      $lieuNaissance=$row['lieuNaissance'];
      $sexe=$row['sexe'];
      $tel=$row['tel'];
      $niveau=$row['niveau'];
      $archiver=$row['archiver'];
      $statut=$row['statut'];
      $date_archiver=$row['dateArchiver'];
      if ($archiver==1 AND $statut=='Elève') {
        echo '<tr>
        <th>'.$id.'</th>
        <td>'.$mat.'</td>
        <td>'.$pseudo.'</td>
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$dateNaissance.'</td>
        <td>'.$lieuNaissance.'</td>
        <td>'.$sexe.'</td>
        <td>'.$tel.'</td>
        <td>'.$niveau.'</td>
        <td>'.$date_archiver.'</td>

    
      </tr>';
  
      }
    }
    
    ?>
  </tbody>
</table>
<?php
    include('footer.php');
    ?>
</body>
</html>