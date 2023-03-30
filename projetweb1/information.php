<?php 
include('head.php');

?>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div name="publitext" >
 <p class="font-weight-bold"> <b> <h1>les informations!!</h1></b> </p>
 <p class="texte-center">
     <?php
     require 'connexionbd.php';
     $req=$bdd->query("select * from texte");
     $req1=$bdd->query("select * from publier");
     while($result=$req->fetch())
     {
        print $result['texte'].'</br>'; 
     }      
     ?>
 </p>
 </div>
 <div name="publific">
 <table class="table table-bordered">
         <tr>
             <th>document utiles</th>
         </tr>
         <?php
         while($result1=$req1->fetch()) 
         {
             echo"<tr>
             <td> 
             ";?> <a href=<?php echo  $result1['contenu'];?>><?php echo $result1['libelle'];?></a>
             </td>
             </tr>

         <?php 
        } ?>
     </table>
 </div>