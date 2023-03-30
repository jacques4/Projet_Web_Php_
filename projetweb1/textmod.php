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


<div class="col-md-12 offset-md-0 form-group jumbotron mt-10" >
     <div class="col-md-6 offset-md-3 form-group jumbotron mt-0">
<form method="post" action="modtext.php" enctype="multipart/form-data">
<div>
	<input type="hidden" name="supp" value='<?php echo $_GET['id'];?>'>
    <label for="text"><b> veuillez saisir le texte a publier </b></label>
<textarea class="form-control" name="info" placeholder="saisir le texte a publier"> <?php echo $_GET['texte'];?>  </textarea>
  </div>
  <br>
  <input type="submit" name="publier" class="btn btn-primary btn-block"><br>
   <input type="reset" value="Annuler" class="btn btn-primary btn-block"><br>
</form>
</div>