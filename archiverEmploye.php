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

    <title>liste des employes archiver</title>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <table class="table">
  <thead>
    <tr> 
      <th scope="col">Id</th>
      <th scope="col">Matricule</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">passwords</th>
      <th scope="col">Sexe</th>
      <th scope="col">Tel</th>
      <th scope="col">Statut</th>
      <th scope="col">salaire</th>
      <th scope="col">date_d'archivage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt=$bdd->prepare('SELECT * FROM personnes where  archiver="1" and (statut="professeur" or statut="comptable" or statut="surveillant")');
    $stmt->execute();
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
      $id=$row['id'];
      $mat=$row['matricule'];
      $pseudo=$row['pseudo'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $sexe=$row['sexe'];
      $tel=$row['tel'];
      $email=$row['email'];
      $salaire=$row['salaire'];
      $archiver=$row['archiver'];
      $statut=$row['statut'];
      $passwords=$row['passwords'];
      $date_archiver=$row['dateArchiver'];
      if ($archiver==1 AND ($statut=='professeur' OR $statut=='comptable' OR $statut=='surveillant')) {
        echo '<tr>
        <th>'.$id.'</th>
        <td>'.$mat.'</td>
        <td>'.$pseudo.'</td>
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$email.'</td>
        <td>'.$passwords.'</td>
        <td>'.$sexe.'</td>
        <td>'.$tel.'</td>
        <td>'.$statut.'</td>
        <td>'.$salaire.'</td>
        <td>'.$date_archiver.'</td>
        <td>
        <button class="btn btn-danger my-1"><a href="restaurerEmploye.php?deleteid='.$id.'" class="text-light">Restaurer</a></button>
        </td>
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