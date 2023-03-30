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


			?>
<div>
<form method="POST" action="modification.php" enctype="multipart/form-data">
  <table  class="table  table-dark table-striped">
  <tr>
             <td> <input type="hidden" name="supp" value='<?php echo $_GET['id'];?>'>    </td>
         </tr>

        <tr>  
             <td>   <h3>  Publier Fichier  </h3> </td>
             <td> <input type="file" name="fichier" value='<?php echo $_GET['fichier'];?>'> </td>
        </tr> 
             <td> <h3>  Le Libelle  </h3></td>
             <td> <input type="text" name="libelle" value='<?php echo $_GET['libelle'];?>'> </td> 
       </tr>

  </table>
  <p>
    <input type="submit" value="PUBLIER"  class="btn btn-primary btn-low" > 
     <input type="reset" name="Annuler"  class="btn btn-primary btn-low">   </p>
</form>
</div>