<?php

include("connexionbd.php");

 	$Modifier=$bdd->prepare('update publier set contenu= :contenu, libelle= :libelle where id= :id');

            $Modifier->execute(array(
            'id'=>$_POST['supp'],
            'contenu' =>$_POST['fichier'] ,
            'libelle' =>$_POST['libelle'] ));
    header('location:comAdmin.php');        

 ?>