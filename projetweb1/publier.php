<?php

echo $_FILES['fichier']['name'];
    $chemin='communiquer/'.$_FILES['fichier']['name'];
    $file_tmp=$_FILES['fichier']['tmp_name'];


   if (move_uploaded_file($file_tmp,$chemin)) 
   {
   header('location:communiquer.php');
   echo"reuissi ";
   }
                  
   else
   {
    echo'<br/>';
  echo "error";
   }
 
require 'connexionbd.php';

echo $chemin;
echo $_POST['libelle'];
 $req=$bdd->prepare("insert into publier(contenu,libelle) values(?,?)");

           $req->execute(array(
            $chemin,
            $_POST['libelle']));



?> 