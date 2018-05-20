<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pronos Korri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_b.css" />

  <style>
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                
      </button>
     <!--  <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       
      </ul>
       <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div  class="col-sm-2 sidenav">
      <!-- <p><a href="#">Link</a></p>-->
      <!-- <p><a href="#">Link</a></p>-->
     <!--  <p><a href="#">Link</a></p>-->
    </div>

    <div class="col-sm-8 text-left" id="principal"> 

      <h1>Korri t'invite à faire tes pronostiques <br />
      car en fait il ne va pas vraiment s'appeler Korri...</h1>
  
<form method="post" action="cible.php">

<!-- Identification -->
   <p> 
      <label for="pseudo"> Avant de commencer, rappelle lui ton petit nom (0 pt): </label> <br />
    <input type="text" name="pseudo" id="pseudo" placeholder="ex: Ranou" autofocus  required  />
  </p>
<!-- Sexe -->
   <p>
       <B> A ton avis, quel sera le sexe de Korri (une seule solution possible cela s'entend) (1 pt) : </B><br />
       <input type="radio" name="sexe" value="Garcon" id="Gars" checked="checked" /> <label for="Gars">Garçon</label><br />
       <input type="radio" name="sexe" value="Fille" id="Fille" /> <label for="Fille">    Fille</label><br /> 
     <input type="radio" name="sexe" value="Hermaphrodite" id="Hermaphrodite" /> <label for="Hermaphrodite">Ni l'un, ni l'autre</label><br /> 
   </p>
<!-- Prénom -->
   <p> 
      <label for="prenom"> Quel sera son prénom ? (2 pts) </label> : <br />
    <input type="text" name="prenom" id="prenom" placeholder="ex: Korri"   required  />
  </p>

<!-- Prénom 2 -->
   <p> 
      <label for="prenom2"> On est sympa tu as une deuxième chance (2 pts) </label> : <br />
    <input type="text" name="prenom2" id="prenom2" placeholder="ex: Korrie"   required  />
  </p>
<!-- Date de naissance -->
   <p> 
      <label for="date_n">Quel sera sa date de naissance. Pour les étourdis, le terme est au 8 juin 2018 (1 pt) </label> : <br />
    <input type="date"  name="date_n" id="date_n" required  />
  </p>
<!-- Poids -->
   <p> 
      <label for="weight">Quel sera son poids (en kg) à 200g près (1 pt)</label> : <br />
  <input type="range" name="weight" id="range_weight" value="0" min="0" max="5" step="0.05" oninput="range_weight_disp.value = range_weight.value">
   <output  id="range_weight_disp"></output>
  </p>

<!-- Validation -->
   <input type="submit"  class="btn btn-default" value="Envoyer" />
</form>
<br />
<p>  Tu l'auras compris, tu es noté sur ce questionnaire. Le vainqueur remportera une bouteille de champagne, donc j'espère pour toi que tu as répondu avec sérieux et application. </p>

      </div>
          <div class="col-sm-2 sidenav">
          <!--<div class="well">
            <p>ADS</p>
          </div>
          <div class="well">
            <p>ADS</p> -->
          </div>
    </div>
</div>


<footer class="container-fluid text-center">
 <p>Copyright Ranou - Tous droits réservés<br />

         <a href="#">Me contacter !</a></p>
</footer>

</body>
</html>
