<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pronos Korri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" /> 
  <style>
  
  </style>
</head>
<body>


<?php

  include('secure/config.php');

try
{
$bdd = new PDO('mysql:host='.$SQLhost.';dbname='.$SQLBase.';charset=utf8', $SQLlogin, $SQLpass);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>

<!-- Insertion des données dans la BDD -->

<?php
$req = $bdd->prepare('INSERT INTO prediction_V0(PSEUDO, SEXE ,  PRENOM , PRENOM2 ,  POIDS , DATE_N)
					   VALUES(:PSEUDO, :SEXE, :PRENOM ,  :PRENOM2 , :POIDS , :DATE_N )');
$req->execute(array(
    'PSEUDO' => $_POST['pseudo'],
    'SEXE' => $_POST['sexe'],
    'PRENOM' => $_POST['prenom'],
    'PRENOM2' => $_POST['prenom2'],
    'POIDS' => $_POST['weight'],
    'DATE_N' => $_POST['date_n']
    ));
?>

<?php
$reponse = $bdd->query('SELECT * FROM prediction_V0');

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

                        
      </button>
     <!-- <a class="navbar-brand" href="#">Logo</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <!--  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">   

 
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- <p><a href="#">Link</a></p> -->
       <!--<p><a href="#">Link</a></p> -->
       <!--<p><a href="#">Link</a></p> -->
    </div>
	
	
    <div class="col-sm-8 text-left"> 
   <br />
  
  <p>Voici le tableau récapitulatif de tes prédictions : </p>     
<div class="container">

   
  <table class="table table-bordered">
    <thead>
      <tr>
       <th>Sexe</th>
       <th>Prénom</th>
       <th>Prénom 2</th>
       <th>Poids</th>
       <th>Date de naissance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td><?php echo $_POST['sexe']; ?></td>
       <td><?php echo $_POST['prenom']; ?></td>
       <td><?php echo $_POST['prenom2']; ?></td>
       <td><?php echo $_POST['weight']; ?> kg  </td>
       <td><?php echo $_POST['date_n']; ?></td>
      </tr>
    </tbody>
  </table>
</div>


<div class="alert alert-success" id="alert_succ">
  <strong>Parfait!</strong> Tout est OK pour moi, les données ont bien été ajoutées
</div>

<div  id="conclusion">
<p>Mais bon, je ne te sens pas trop sûr de toi. Si tu veux revenir en arrière, <a href="traitement.php">clique ici </a> pour revenir au formulaire. </p>   
<p>Attention, seuls les derniers pronos envoyés sont pris en compte. </p>
<p> La date de clotûre est au 27 mai 2018. </p>

</div>

    </div>
    <div class="col-sm-2 sidenav">
      <!--<div class="well">
        <p>ADS</p> 
      </div>
      <div class="well">
       <p>ADS</p> 
      </div>-->
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
 <p>Copyright Ranou - Tous droits réservés<br />

         <a href="#">Me contacter !</a></p>
</footer>

</body>
</html>
