<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Page Elève</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary mt-5"><a href="addEleve.php" class="text-light">Ajouter</a></button>
    </div>
    <table class="table">
  <thead>
    <tr> 
      <th scope="col">Identifiant</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">DateNaissance</th>
      <th scope="col">LieuNaissance</th>
      <th scope="col">Statut</th>
      <th scope="col">Passwords</th>
      <th scope="col">Sexe</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
      <th scope="col">Niveau</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt=$bdd->prepare("SELECT * FROM personnes");
    $stmt->execute();
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
      $id=$row['id'];
      $pseudo=$row['pseudo'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $dateNaissance=$row['dateNaissance'];
      $lieuNaissance=$row['lieuNaissance'];
      $statut=$row['statut'];
      $passwords=$row['passwords'];
      $sexe=$row['sexe'];
      $email=$row['email'];
      $tel=$row['tel'];
      $niveau=$row['niveau'];
      $archiver=$row['archiver'];
      if ($archiver==0) {
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$pseudo.'</td>
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$dateNaissance.'</td>
        <td>'.$lieuNaissance.'</td>
        <td>'.$statut.'</td>
        <td>'.$passwords.'</td>
        <td>'.$sexe.'</td>
        <td>'.$email.'</td>
        <td>'.$tel.'</td>
        <td>'.$niveau.'</td>
        <td>
        <button class="btn btn-primary my-1"><a href="updateEleve.php?updateid='.$id.'" class="text-light">Modifier</a></button>
        <button class="btn btn-danger my-1"><a href="deleteEleve.php?deleteid='.$id.'" class="text-light">Supprimer</a></button>
        </td>
    
      </tr>';
  
      }
    }
    
    ?>
  </tbody>
</table>
</body>
</html>