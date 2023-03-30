<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> IAI-TOGO</title>
  <link href="..css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../style.css">

<!--  fontawesome-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="my_menu">
 <ul class="menu">
    <li class="logo_li"><a href="#" > <img src="../img/IAI (2).jpg" class="img-thumbnail" alt=""></a></li>
     <li><a href="../index.html">HOME</a></li>
     <li><a href="#">CONCOURS <i class="fas fa-sort-down"></i></a>
       <ul>
           <li><a href="#iai-togo">IAI TOGO</a></li>
           <li><a href="#iai-siege">IAI SIEGE</a></li>
           
       </ul>
     
     </li>
     <li><a href="communiquer.php">INFORMATION</a></li>
     <li><a href="../inscription.html">INSCRIPTION</a></li>
     <li><a href="connexiona.php">CONNEXION</a></li>
 </ul>
 </div>
<!-- banner-->

    <?php
 require'connexion.php';

$req=$bdd->query("select * from etudiant");
       echo"<center>"; ?>

      <div id='sectionAimprimer' style="padding-top: 75px;">
        <a href="#" onClick="imprimer('sectionAimprimer')">Imprimer</a>
<?php
    echo "<table border='1' >
              <caption> <h1> LISTE DES ETUDIANTS INSCRITS </h1> </caption>
             <tr>
                <td>Numero</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>SEXE</td>
                <td>DATE</td>
                <td>NATIONALITE</td>
                <td>SERIE</td>
                 <td>ANNEE</td>
                <td>Diplome </td>
            </tr>
         ";
    echo"</center>";


while($result=$req->fetch())
{
     $result['id'];
     $result['nom'];
     $result['prenom'];
     $result['sexe'];
     $result['dat'];
     $result['nationalite'];
     $result['serie'];
     $result['annee'];
     $result['diplome'];
   
    
       echo "<tr>
                <td>".$result['id']."</td>
                    <td>".$result['nom']."</td>
                    <td>".$result['prenom']."</td>
                    <td>".$result['sexe']."</td>
                    <td>".$result['dat']."</td>
                    <td>".$result['nationalite']."</td>
                    <td>".$result['serie']."</td>
                    <td>".$result['annee']."</td>
                    <td>".$result['diplome']."</td>";?>  
     </tr> <?php
}  
echo '</table>
</div>';
?>


<script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>


</body>
</html>