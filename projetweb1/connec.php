<?php 

try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=admin', 'root', '',
$pdo_options);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
if(isset($_POST["login"]))
{
	$result=$bdd->query('select * from login');
     $data= $result->fetch();
     $num=$data['id'];
     $utile=$data['username'];
     $pass=$data['password'];
if ($_POST["username"]==$utile && $_POST["password"]==$pass) 
{ 
    echo "bonjour";

		header("location:pageAdmin.php");
}else{echo "erreur";}


}



?>