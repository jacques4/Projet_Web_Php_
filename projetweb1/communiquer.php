<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-image: url('img/color.png'); background-repeat: no-repeat; background-size: 100%;">

<div >
        <img src="img/logo1.jpg" width="70px" >  <font color="white">IAI-TOGO</font>
		<h2 style="text-align: center; background-color:rgb(128, 255, 255);"> ==========COMMUNIQUER/INFO========== </h2>
	</div>

	<?php

require'connexionbd.php';

$req=$bdd->query("select * from publier");
      

while($result=$req->fetch())
{
 
       echo "<tr>"; ?>
       <ul>
               <li><h2> <a href='<?php echo $result['contenu'];?>'> <?php print $result['libelle'];?> </a> </h2> </li>
       </ul>        
                 
        </tr> <?php 
}  


?>     


</body>
</html>




