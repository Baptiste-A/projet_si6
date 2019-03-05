<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste des candidatures</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
</html>

<?php

  include("connexion.php");

  $stmt = $bdd->prepare('SELECT *
     FROM joueurs
     WHERE valide IS NULL');

  			$stmt ->execute();
  			//$resultat = $stmt ->fetchAll();

  			echo "<h2>Liste des candidatures</h2>";

  			echo "<table>";
  			echo "<tr><th>num_joueur</th><th>sexe</th><th>nom_joueur</th>
          <th>prenom_joueur</th><th>adresse</th><th>code_postal</th>
          <th>ville</th><th>email</th><th>tel</th><th>naissance</th><th>valide</th></tr>";

  			while($resultat = $stmt->fetch()) {
  				echo "<tr><td>".$resultat['num_joueur']."</td>";
  				echo "<td>".$resultat['sexe']."</td>";
          echo "<td>".$resultat['nom_joueur']."</td>";
          echo "<td>".$resultat['prenom_joueur']."</td>";
          echo "<td>".$resultat['adresse']."</td>";
          echo "<td>".$resultat['code_postal']."</td>";
          echo "<td>".$resultat['ville']."</td>";
          echo "<td>".$resultat['adresse_email']."</td>";
          echo "<td>".$resultat['telephone']."</td>";
          echo "<td>".$resultat['date_naissance']."</td>";
          echo "<td>".$resultat['valide']."</td></tr>";
  			}

  			echo "</table>";

?>

<p id="boutton"><a href="administration.php">Ok</a></p>
