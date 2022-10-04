<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>lister les employes</h4>

    <table>
<th>prenom</th>
<th>nom</th>
<th>date_de_naissance</th>
<th>lieu_de_naissance</th>
<th>adresse</th>
<th>tel</th>
<th>email</th>
<th>statut</th>
<?php
require_once("connect.php");
$req=$con->query("SELECT * FROM employes");
while($aff=$req->fetch()){?>

<tr>
<td> <?php echo $aff['prenom']; ?> </td>
<td>  <?php echo $aff['nom']; ?> </td>
<td>  <?php echo $aff['date_de_naissance']; ?></td>
<td>  <?php echo $aff['lieu_de_naissance']; ?></td>
<td>  <?php echo $aff['adresse']; ?></td>
<td>  <?php echo $aff['tel']; ?></td>
<td>  <?php echo $aff['email']; ?></td>
<td>  <?php echo $aff['statut']; ?></td>
</tr>
<?php }?>
    </table>
</body>
</html>