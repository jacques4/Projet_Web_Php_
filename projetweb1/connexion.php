
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="stylec.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="my_menu">
 <ul class="menu">
    <li class="logo_li"><a href="#" > <img src="IAI (2).jpg" class="img-thumbnail" alt=""></a></li>
     <li><a href="index.php">HOME</a></li>
     <li><a href="#">CONCOURS <i class="fas fa-sort-down"></i></a>
       <ul>
           <li><a href="index.html#iai-togo">IAI TOGO</a></li>
           <li><a href="index.html#iai-siege">IAI SIEGE</a></li>
           
       </ul>
     
     </li>
     <li><a href="information.php">INFORMATION</a></li>
     <li><a href="inscription.html">INSCRIPTION</a></li>
 </ul>
 </div>
 <br>
 <br>
 <br>
 <br>
 <div class="container">
    <div class="col-md-6 offset-md-3 form-group jumbotron mt-5" >
                <form action="connec.php" method="POST">
                <p id="connexion_text" class="text-center">connexion</p>
                <div class="form-group">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                </div>
                <div class="form-group">
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                </div>
                <p>
                        <input type="submit" value="Se connecter" name="login" class="btn btn-primary btn-block" />
                     </p>
                </form>
            </div>
            </div>
    </body>
</html>