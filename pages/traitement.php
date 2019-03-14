<?php

  include("connexion.php");

  $sexe = $_POST['sexe'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $rue = $_POST['rue'];
  $cp = $_POST['cp'];
  $ville = $_POST['ville'];
  $mail = $_POST['mail'];
  $tel = $_POST['tel'];
  $naissance = $_POST['naissance'];

  $data = array(
    'sexe' => $sexe,
    'nom' => $nom,
    'prenom' => $prenom,
    'rue' => $rue,
    'cp' => $cp,
    'ville' => $ville,
    'mail' => $mail,
    'tel' => $tel,
    'naissance' => $naissance,
  );

  $query = $bdd->prepare('INSERT INTO joueurs(sexe, nom_joueur, prenom_joueur, adresse, code_postal, ville, adresse_email, telephone, date_naissance)
  VALUES(:sexe, :nom, :prenom, :rue, :cp, :ville, :mail, :tel, :naissance)');

  $req = $query->execute($data);

  header('Location: inscriptionok.php');
