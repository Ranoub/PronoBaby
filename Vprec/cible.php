<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Cible</title>

    </head>
<body>
<?php

try
{

$bdd = new PDO('mysql:host=localhost;dbname=bebe;charset=utf8', 'root', '');
//$bdd = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>

<?php
$reponse = $bdd->query('SELECT * FROM prediction_V0');

?>


<div class="container">
  <br />
  <p>Voici le tableau r&eacute;capitulatif de tes pr&eacute;dictions   </p>            
  <table class="table table-bordered">
    <thead>
      <tr>
       <th>Sexe</th>
       <th>Prenom</th>
       <th>Poids</th>
       <th>Date de naissance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td><?php echo $_POST['sexe']; ?></td>
       <td><?php echo $_POST['prenom']; ?></td>
       <td><?php echo $_POST['weight']; ?> kg  </td>
       <td><?php echo $_POST['date_n']; ?></td>
      </tr>
    </tbody>
  </table>
</div>


<!-- Insertion des données dans la BDD -->

<?php

$req = $bdd->prepare('INSERT INTO prediction_V0(PSEUDO, SEXE ,  PRENOM , POIDS , DATE_N)
					   VALUES(:PSEUDO, :SEXE, :PRENOM , :POIDS , :DATE_N )');

$req->execute(array(
    'PSEUDO' => $_POST['pseudo'],
    'SEXE' => $_POST['sexe'],
    'PRENOM' => $_POST['prenom'],
    'POIDS' => $_POST['weight'],
    'DATE_N' => $_POST['date_n']
    ));

?>

<div class="alert alert-success" id="alert_succ">
  <strong>Parfait!</strong> Tout est OK pour moi, les donn&eacute;es ont bien &eacute;t&eacute; ajout&eacute;es
</div>

<div  id="conclusion">
<p>Mais bon, je ne te sens pas trop sûr de toi. Si tu veux revenir en arri&egrave;re, <a href="traitement.php">clique ici </a> pour revenir au formulaire</p>
</div>

</body>
</html>