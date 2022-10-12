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

    <title>Page employes</title>
</head>

<body>
<h1>Liste des Employes de l'école</h1>
    <div class="container">
        <button class="btn btn-primary mt-5"><a href="addEmployes.php" class="text-light">Ajouter</a></button>
    </div>
    <table class="table">
  <thead>
    <tr> 
      <th scope="col">Identifiant</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">statut</th>
      <th scope="col">Sexe</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
      <th scope="col">Salaire</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stmt=$bdd->prepare("SELECT * FROM personnes");
    $stmt->execute();
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
      $archiver=$row['archiver'];
      $statut=$row['statut'];
      $pseudo=$row['pseudo'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $passwords=$row['passwords'];
      $sexe=$row['sexe'];
      $email=$row['email'];
      $tel=$row['tel'];
      $salaire=$row['salaire'];
      $id=$row['id'];

      if ($archiver==0 AND $statut!='Elève') {
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$pseudo.'</td>
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$statut.'</td>
        <td>'.$sexe.'</td>
        <td>'.$email.'</td>
        <td>'.$tel.'</td>
        <td>'.$salaire.'</td>
        <td>
        <button class="btn btn-primary my-1"><a href="updateEmployes.php?updateid='.$id.'" class="text-light">Modifier</a></button>
        <button class="btn btn-danger my-1"><a href="deleteEmployes.php?deleteid='.$id.'" class="text-light">Supprimer</a></button>
        </td>
    
      </tr>';
  
      }
    }
    
    ?>
  </tbody>
</table>
</body>
</html>