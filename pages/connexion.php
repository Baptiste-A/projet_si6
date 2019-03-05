<?php

  try {
    $bdd = new PDO('mysql:host=localhost;dbname=joueurs','root','');

  } catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
  }
