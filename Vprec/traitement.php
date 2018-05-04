<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Questionnaire</title>
    </head>


    <body>

    	 <header>

            <h1>Et voilà le gros questionnaire </h1>

         </header>

	     <nav>
		    <ul>
		        <li><a href="index.html">Accueil</a></li>
		        <li><a href="forum.html">Forum</a></li>
		        <li><a href="contact.html">Contact</a></li>
		    </ul>
		 </nav>
<!--
 		<div id="banniere_image">
 
                <div id="banniere_description">
                    Retour sur mes vacances aux États-Unis...
                    <a href="#" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a>

                </div>
-->
            </div>

		 <section>
		   	 <article>

<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

<form method="post" action="cible.php">

<!-- Identification -->
   <p> 
      <label for="pseudo"> Mais t'es qui ? </label> : <br />
    <input type="text" name="pseudo" id="pseudo" placeholder="ex: Ranou" autofocus  required  />
  </p>

<!-- Sexe -->
   <p>
       Quel sera le sexe (une seule solution possible cela s'entend) :<br />
       <input type="radio" name="sexe" value="Garcon" id="Gars" checked="checked" /> <label for="Gars">Garçon</label><br />
       <input type="radio" name="sexe" value="Fille" id="Fille" /> <label for="Fille">    Fille</label><br /> 
 	   <input type="radio" name="sexe" value="Hermaphrodite" id="Hermaphrodite" /> <label for="Hermaphrodite">Hermaphrodite</label><br /> 
   </p>

<!-- Prénom -->
   <p> 
      <label for="prenom"> Quel sera le prénom ? </label> : <br />
    <input type="text" name="prenom" id="prenom" placeholder="ex: Riroux"   required  />
  </p>


<!-- Poids -->
   <p> 
      <label for="weight">Quel sera son poids (en kg)</label> : <br />
  <input type="range" name="weight" id="range_weight" value="0" min="0" max="5" step="0.05" oninput="range_weight_disp.value = range_weight.value">
   <output  id="range_weight_disp"></output>
  </p>

<!-- Date de naissance -->
   <p> 
      <label for="date_n">Quel sera la date de naissance </label> : <br />
    <input type="date" "  name="date_n" id="date_n" required  />
  </p>

<!-- Validation -->
   <input type="submit" value="Envoyer" />

</form>

</article>

</section>

    	 <footer>

		     <p>Copyright Ranou - Tous droits réservés<br />

		     <a href="#">Me contacter !</a></p>

    	 </footer>

    </body>


</html>