<?php 
include('head.php');

?>
 <br>
 <br>
 <div class="container col-md-12" style="background-image: url('back1.jpg');">
<div class="col-md-6 offset-md-3 form-group jumbotron mt-5" >

                <form action="inscri.php" method="POST"  enctype="multipart/form-data">
                    <p id="inscription_text" class="text-center">
                       <h1> inscription </h1>
                    </p>
                    <div class="form-group">
                        <label for="nom"><b> Nom</b></label>
                        <input name="nom" id="nom" type="text" class="form-control" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom"><b> Prenom </b></label>
                        <input name="prenom" id="prenom" type="text" class="form-control" placeholder="Entrez vos prenoms" required>
                    </div>
                    <div class="form-group">
                        <label for="date"><b> Date de Naissance</b></label>
                        <input name="date_nais" id="date" type="date" class="form-control" placeholder="date de naissance" max="2006-12-31" required>
                    </div>
                    <div class="form-group">
                        <label for="sexe"><b> Sexe </b></label> <br>
                        <input type="radio" name="sexe" value="M" id="M"
                        checked="checked" /> <label for="M">M</label>
                        <input type="radio" name="sexe" value="F" id="F" /> <label
                        for="F">F</label>     
                    </div>

<div class="form-group">
    <label for="annee"> <b> Annee D'obtention du BAC  </b></label>
    <input  type="month" name="annee" class="form-control" placeholder=" Annee D'obtention du BAC 2" required>
</div>

        <div class="form-group">
            <label for="serie"><b> SERIE DE BAC </b></label> <br>
            <select name="serie"  class="form-control" aria-placeholder="pays" accept='.pdf' required>
                            <option value="serie">---choisir votre serie---</option>

                            <option selected>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                        </select>
                        
                        
                    </div>

                    <div class="form-group">
                        <label for="pays" > <b> pays </b></label>
                        <select name="pays"  class="form-control" aria-placeholder="pays" required>
                            
                            <option selected>Togolaise</option>
                            <option>Beninoise</option>
                            <option>Ghaneenne</option>
                            <option>Senegalaise</option>
                            <option>Brukinabese</option>
                            <option>Nigeriene</option>
                            <option>Gabonaise</option>
                            <option>Camerounaise</option>
                            <option>Marocaine</option>
                            <option>Algerienne</option>
                        </select>
                    </div>
                      <p>
                             <b> releve du bac</b><br>
                             <input type="file" name="fichier" accept=".pdf" class="btn btn-default fileupload-exists" required/> <br />
                     </p>
                <p>
                  <input type="submit" value="Envoyer le fichier" class="btn btn-primary btn-block" />
                  <input type="reset" value="Annuler " class="btn btn-primary btn-block" />
                </p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>