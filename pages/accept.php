<?php

  include("connexion.php");

  echo $_GET['id'];
    $sql =$db->query("DELETE from joueurs WHERE Numero=".$_GET['id']);
