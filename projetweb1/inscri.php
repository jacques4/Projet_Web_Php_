<?php 
require 'connexionbd.php';
if (!empty($_FILES)) 
{
   $chemin='files/'.$_FILES['fichier']['name'];
   $file_tmp=$_FILES['fichier']['tmp_name'];
   $extension=strrchr($chemin,".");
   $extensions=array('.pdf','.PDF');
    if(in_array($extension,$extensions)){
        if (move_uploaded_file($file_tmp,$chemin)) 
    {
            //header("location:hdp.php");
             $sql = "INSERT INTO inscrisption(nom,prenom,date_nais,sexe,serie_bac,pays,releve,annee ) VALUES (:nom,:prenom,:date_nais,:sexe,:serie_bac,:pays,:releve,:annee)";
    $res = $bdd->prepare($sql);
    $exec = $res->execute(array(
        ":nom"=>$_POST['nom'],
        ":prenom"=>$_POST['prenom'],
        ":date_nais"=>$_POST['date_nais'],
        ":sexe"=>$_POST['sexe'],
        ":serie_bac"=>$_POST['serie'],
        ":pays"=>$_POST['pays'],
        ":releve"=>$chemin,
        ":annee"=>$_POST['annee'] ));
   
  header('location:index.php');
    }

else
       {
            echo "error";
        }
    }else
{
        echo'<font color="red"> <h3> Seul les fichiers PDF sont autorisés </h3> <font>';    
}


}
?>







