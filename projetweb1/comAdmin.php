<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MY SCHOOL</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">

<!--  fontawesome-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
</head>
<?php
require 'connexionbd.php';
$req=$bdd->query("select * from publier");
$req1=$bdd->query("select * from texte");
?>
<div  >
<table class="table table-dark table-striped">
<b>MODIFIER OU SUPPRIMER UN FICHIER</b>
  <tr>
    <th>Numero</th>
    <th>Information</th>
    <th>Supprimer</th>
    <th>Modifier</th>
  </tr>
  <?php
  while($result=$req->fetch())
  {
    $result['id'];
    $result['contenu'];
    $result['libelle'];
  
      echo "<tr>";?>
      <?php $id=$result['id'];
      $fichier=$result['contenu'];
      $libelle=$result['libelle'];
      ?>
         <td><?php echo $result['id']?></td>
               <td> <a href=<?php echo $result['contenu'];?> >  <?php echo $result['libelle'];?> </a></td> 
               <?php  echo"<td> <a href='supPub.php?id=$id'> Supprimer  </td>"; ?>
<?php  echo"<td> <a href='modPub.php?id=$id&fichier=$fichier&libelle=$libelle'> Modifier </td>"; ?>                      
              </tr>
              <?php

  }
    
  
    ?>
</table>
</div> 
<br>
<br>
<div  >
<table class="table table-dark table-striped">
<b>MODIFIER OU SUPPRIMER UNE PUBLICATION</b>
  <tr>
    <th>Numero</th>
    <th>Information</th>
    <th>Supprimer</th>
    <th>Modifier</th>
  </tr>
  <?php
  while($result1=$req1->fetch())
  {
    $result1['id'];
    $result1['texte'];
  
      echo "<tr>";?>
      <?php $id=$result1['id'];
      $texte=$result1['texte'];
      ?>
         <td><?php echo $result1['id']?></td>
         <td><?php echo $result1['texte']?></td>
         <?php  echo"<td> <a href='supptext.php?id=$id'> Supprimer  </td>"; ?>
        <?php  echo"<td> <a href='textmod.php?id=$id&texte=$texte'> Modifier </td>"; ?>                                                  
              </tr>
              <?php

  }
    
  
    ?>
</table>
</div> 