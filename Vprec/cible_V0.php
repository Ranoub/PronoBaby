<?php

// Sous WAMP (Windows)

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

<?php
 // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>  
<p>

    <strong>le pseudo est </strong> : <?php echo $donnees['PSEUDO']; ?>  <br />

    <strong>le prenom prédit est </strong> : <?php echo $donnees['PRENOM']; ?>  <br />

 </p>
<?php
}
?>

<p>Voici ce que tu as prédit</p>

<p>Je sais comment tu t appelles,Tu t appelles <?php echo htmlspecialchars($_POST['pseudo']); ?> !</p>

<p> <?php echo $_POST['weight']; ?> </p>

<p> <?php echo $_POST['date_n']; ?> </p>

<p> <?php echo $_POST['sexe']; ?> </p>

<p>Si tu veux revenir en arriere, <a href="traitement.php">clique ici </a> pour revenir au formulaire</p>

<!-- Insertion des données dans la BDD -->



<?php

$req = $bdd->prepare('INSERT INTO prediction_V0(PSEUDO, PRENOM)
					   VALUES(:PSEUDO, :PRENOM)');

$req->execute(array(

    'PSEUDO' => $_POST['pseudo'],

    'PRENOM' => $_POST['pseudo']

    ));


echo 'Le jeu a bien été ajouté !';

?>