<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table{
        border:2px solid black;
    }
    td,th{
        border:1px solid black;
        border-collapse:collapse;
    }
</style>
<body>
    <h4>lister les employes</h4>

    <table>
<th>ID</th>
<th>nom</th>
<th>prenom</th>
<th>statut</th>
<th>passwords</th>
<th>sexe</th>
<th>email</th>
<th>tel</th>
<th>Action</th>
<?php
require_once 'connect.php';
$req=$bdd->query("SELECT * FROM personnes where statut= 'professeur' or statut='surveillant' or statut='comptable'");
while($aff=$req->fetch()){
   if($aff['archiver']==0){
    
    ?>

<tr>
<td> <?php echo $aff['id']?></td>
<td> <?php echo $aff['nom']; ?> </td>
<td>  <?php echo $aff['prenom']; ?> </td>
<td>  <?php echo $aff['statut']; ?></td>
<td>  <?php echo $aff['passwords']; ?></td>
<td>  <?php echo $aff['sexe']; ?></td>
<td>  <?php echo $aff['email']; ?></td>
<td>  <?php echo $aff['tel']; ?></td>
<td>
    <a href="modifier.php?id=<?php echo $aff['id'] ?> ">Modifier</a>
    <a href="supprimer.php?id=<?php echo $aff['id'] ?>">supprimer</a>
</td>
</tr>
<?php }}?>
    </table>
</body>
</html>