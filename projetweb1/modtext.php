<?php

require 'connexionbd.php';

 	$Modifier=$bdd->prepare('update texte set texte= :texte where id= :id');

            $Modifier->execute(array(
            'id'=>$_POST['supp'],
            'texte'=>$_POST['info'] ));
    header('location:comAdmin.php');        

 ?>