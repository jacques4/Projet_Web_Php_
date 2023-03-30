<?php


require'connexionbd.php';

 $req=$bdd->prepare("insert into texte(texte) values(?)");
           $req->execute(array($_POST['info'] ));
           
           header('location:information.php');
 ?>