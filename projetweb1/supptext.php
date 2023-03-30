<?php

require 'connexionbd.php';


 $req=$bdd->prepare("delete from texte where id= :id");
 $req->execute(array('id'=>$_GET['id']));
 echo "<font color='green'> <h3> Suppression Reusssi </h3> </font>";

include('comAdmin.php');
 ?>