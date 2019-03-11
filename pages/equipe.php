<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste des candidatures</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
<?php

include("connexion.php");

$sexe = $_POST['sexe'];
$categorie = $_POST['categories'];

$requete = $bdd->query("SELECT *
   FROM joueurs
   WHERE valide=1
   AND DateDiff(getDate(),date_naissance)=\"$categorie\"
   AND sexe = \"$sexe\"");

   echo "<h2>Liste des joueurs</h2>";
   echo "<form action=\"equipe.php\" method=\"POST\">";
   echo "<table>";
   echo "<tr><th>num_joueur</th><th>sexe</th><th>nom_joueur</th>
     <th>prenom_joueur</th><th>adresse</th><th>code_postal</th>
     <th>ville</th><th>email</th><th>tel</th><th>naissance</th><th>valide</th></tr>";

   while($resultat = $requete->fetch()) {
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
     echo "<td>".$resultat['valide']."</td>";
     echo "<td><input type=\"radio\" name=\"numJoueur\" value=\"".$resultat['num_joueur']."\"></td></tr>";
   }
   $stmt->closeCursor();
   echo "</table>";
