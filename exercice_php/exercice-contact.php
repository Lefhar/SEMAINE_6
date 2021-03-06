<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Exercice 5 : vérification d'un formulaire</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <article>
         <p>* Ces zones sont obligatoires</p>
         <form action="post_contact.php" method="post" id="formulaire_contact"  name="formulaire_contact"  > <!--balise form début du formulaire-->
         <fieldset><!--début fieldset pour les coordonnées-->
             <legend>Vos coordonnées</legend>
             <div class="form-group">
                 <label for="nom">Votre nom* :  </label>
                 <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" value="" >
                 <div id="dnom"></div>
                 <br>
               </div>
               <div class="form-group">
                 <label for="prenom">Votre prénom* :  </label>
                 <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom"  >
                 <div id="dprenom"></div><br>
               </div>
             
             <p>Sexe* : </p>
             <div class="form-check  form-check-inline">
             <input type="radio" name="sexe" id="fem"  class="form-check-input" value="féminin" checked>
             <label for="fem" >Fémimin </label> 
            </div>
            <div class="form-check  form-check-inline">
              <input type="radio" name="sexe" id="masc"  class="form-check-input" value="masculin"  >
              <label for="masc" >Masculin</label><br>
             
            </div>
            <div class="form-group">
              <label for="date">Date de naissance* :  </label>
              <input type="date" id="date" name="date" class="form-control" >
              <div id="ddate"></div><br>
            </div>

              <div class="form-group">
                 <label for="cp">Code postal :  </label>
         
                 <input type="text" id="cp" class="form-control" name="cp"><br>
                 <div id="dcp"></div>
                </div>

              <div class="form-group">
                 <label for="adresse">Adresse :  </label>
                 <input type="text" id="adresse" name="adresse" class="form-control" placeholder="Votre adresse postale" ><br>
                 <div id="dadresse"></div>
                </div>

               <div class="form-group">
                 <label for="ville">Ville :  </label>
                 <input type="text" id="ville" class="form-control" name="ville"><br>
                 <div id="dville"></div>
                </div>

              <div class="form-group">
                 <label for="email">Email :  </label>
                 <input type="text" id="email" name="email" class="form-control" placeholder="votre Email"  >
                <div id="demail"></div><br>
             </div>

                </fieldset><!--fin fieldset pour les coordonnées-->
     
         <fieldset><!--début fieldset pour la demande-->
             <legend>Votre demande</legend>
             <div class="form-group">
          <label for="mescommandes"> Sujet* : </label>  
         
          <select name="mescommandes" id="mescommandes" class="form-control">
              <option value="">Choisissez</option>
                 <option value="Mes commandes">Mes commandes</option>
                 <option value="question">Question sur un produit</option>
                 <option value="Réclamation">Réclamation</option>
                 <option value="Autres">Autres</option>
             </select>
             <div id="dmescommandes"></div><br>
             </div>

             <div class="form-group">
             <label for="question">Votre question* : </label>
             <textarea name="question"  id="question" class="form-control" rows="2" cols="20" ></textarea> 
            <div id="dquestion"></div><br>
         </div>
         </fieldset><!--fin fieldset pour la demande-->
         <br>

         <div class="form-group">
     
            <div class="custom-control">
         <input type="checkbox" class="custom-control-input" id="cgu"  name="cgu"  >
          <label class="custom-control-label" for="cgu">* J'accepte le traitement informatique de ce formulaire.</label>     
         <div id="dcgu"></div><br>
        </div>
            </div>
            
        <div class="form-group">
              <button type="submit"  class="btn btn-dark btn-lg">Envoyer</button>    <button type="reset" class="btn btn-dark btn-lg">Annuler</button>
         </div>
     </form> <!--balise form fin du formulaire-->
      </div>
	</div></div>
<script src="script5.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>