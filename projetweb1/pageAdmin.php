<?php 
include('head.php');

?>

 <br>
     <br>
     <br>
     <br> 
     <script type="text/javascript"> 
function AfficherMasquer()
{
divInfo = document.getElementById('csexe');
 
if (divInfo.style.display == 'none')
divInfo.style.display = 'block';
else
divInfo.style.display = 'none';
 
}
</script>
<script type="text/javascript"> 
function AfficherMasquer1()
{
divInfo = document.getElementById('cserie');
 
if (divInfo.style.display == 'none')
divInfo.style.display = 'block';
else
divInfo.style.display = 'none';
 
}
</script>
 <div class="col-md-12 offset-md-0 form-group jumbotron mt-10" >
 <input type="button" value="Afficher la classification par sexe" class="btn btn-primary btn-large" onClick="AfficherMasquer()" />
     <input type="button" value="Afficher la classification par serie"class="btn btn-primary btn-large" onClick="AfficherMasquer1()" />
     <br>
     <a href="comAdmin.php"> <h3> Modifier ou Supprimer une pub !!! </a>  </h3> 
     <br>
     <br>
     <?php
require "connexionbd.php";
$req=$bdd->query('select * from inscrisption order by sexe');
$req1=$bdd->query('select * from inscrisption order by serie_bac');
$req2=$bdd->query('select * from inscrisption ');
?>
<div id="csexe" style="display:none;">
<table class="table table-dark table-striped">
<b>classification par sexe</b>
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>sexe</th>
    <th>date_nais</th>
    <th>pays</th>
    <th>serie</th>
    <th>releve</th>
    <th>annee</th>
  </tr>
  <?php
  while($result=$req->fetch())
  {
       $result['id'];
       $result['nom'];
       $result['prenom'];
       $result['sexe'];
       $result['date_nais'];
       $result['pays'];
       $result['serie_bac'];
       $result['releve'];
       $result['annee'];
     
      
         echo "<tr>
                  <td>".$result['id']."</td>
                      <td>".$result['nom']."</td>
                      <td>".$result['prenom']."</td>
                      <td>".$result['sexe']."</td>
                      <td>".$result['date_nais']."</td>
                      <td>".$result['pays']."</td>
                      <td>".$result['serie_bac']."</td>
                      <td>".$result['releve']."</td>
                      <td>".$result['annee']."</td>

                 </tr>";
  }    
  ?>
</table> 
</div>
<br>
<br>
<div id="cserie" style="display:none;" >
<table class="table table-dark table-striped">
<b>classification par serie</b>
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>sexe</th>
    <th>date_nais</th>
    <th>pays</th>
    <th>serie</th>
    <th>releve</th>
    <th>annee</th>
  </tr>
  <?php
  while($result1=$req1->fetch())
  {
    $result1['id'];
    $result1['nom'];
    $result1['prenom'];
    $result1['sexe'];
    $result1['date_nais'];
    $result1['pays'];
    $result1['serie_bac'];
    $result1['releve'];
    $result1['annee'];
  
   
      echo "<tr>
               <td>".$result1['id']."</td>
                   <td>".$result1['nom']."</td>
                   <td>".$result1['prenom']."</td>
                   <td>".$result1['sexe']."</td>
                   <td>".$result1['date_nais']."</td>
                   <td>".$result1['pays']."</td>
                   <td>".$result1['serie_bac']."</td>
                   <td>".$result1['releve']."</td>
                    <td>".$result1['annee']."</td>
              </tr>";

  }
  
  
    ?>
</table>
</div> 
<form method="POST" action="publier.php" enctype="multipart/form-data">
  <table  class="table  table-bordered">
  <tr>  
             <td>   <h3>  Publier Fichier  </h3> </td>
             <td> <input type="file" name="fichier"> </td>
        <tr> 
             <td> <h3>  Le Libelle  </h3></td>
             <td> <input type="text" name="libelle"> </td> 
       </tr>
  </table>
  <p>
    <input type="submit" value="PUBLIER"  class="btn btn-primary btn-low" > 
     <input type="reset" name="Annuler"  class="btn btn-primary btn-low">   </p>
</form>          
     <div class="col-md-6 offset-md-3 form-group jumbotron mt-0">
<form method="post" action="text.php" enctype="multipart/form-data" > 
<div>
    <label for="text"><b> veuillez saisir le texte a publier </b></label>
  <textarea class="form-control" name="info" placeholder="veuillez saisir le texte a publier"></textarea>
  </div>
  <br>
  <input type="submit" name="publier" class="btn btn-primary btn-block"><br>
   <input type="reset" value="Annuler" class="btn btn-primary btn-block"><br>
</form>
<br>
<br>

<div id='imprimer'>
        <a href="#" onClick="imprimer('imprimer')"> <h3> Imprimer </h3> </a>
<table class="table table-dark table-striped">
<b>liste des etudiants inscrits</b>
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>sexe</th>
    <th>date_nais</th>
    <th>pays</th>
    <th>serie</th>
    <th>releve</th>
    <th>annee</th>
    <th>telecharger</th>
  </tr>
  <?php
  while($result2=$req2->fetch())
  {
       $result2['id'];
       $result2['nom'];
       $result2['prenom'];
       $result2['sexe'];
       $result2['date_nais'];
       $result2['pays'];
       $result2['serie_bac'];
       $result2['releve'];
     
      
         echo "<tr>
                  <td>".$result2['id']."</td>
                      <td>".$result2['nom']."</td>
                      <td>".$result2['prenom']."</td>
                      <td>".$result2['sexe']."</td>
                      <td>".$result2['date_nais']."</td>
                      <td>".$result2['pays']."</td>
                      <td>".$result2['serie_bac']."</td>
                      <td>".$result2['releve']."</td> 
                      <td>".$result2['annee']."</td>";
                      ?>
                      <td> <a href='<?php echo $result2['releve']; ?>' download=''> Telecharger </td> <?php
                      
                echo" </tr>";
  }    
  ?>
</table> 
<script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
</div>
</div>   
 </div>
 </body>
 </html>