<?php
    session_start();

    include("connexion.php");

    $valide = false;

    //if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
      if($_POST['login'] && $_POST['password'])
      {
        $login = $_POST['login'];
        $login_test = $bdd->query("SELECT *
           FROM admin
           WHERE id = \"$login\""
         );

        while($rowadmin = $login_test->fetch()) {
          if($rowadmin['pass'] == $_POST['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $valide = true;
          } else {
            $valide = false;
          }
        }
        $login_test->closeCursor();
      }
    //}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Administration</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    </head>

    <body>
    	<div id="entete">
	    	<div id="titre">
	    		<h1><span id="vert">GREEN</span>FALLS FC</h1>
	    	</div>

	    	<div id="menu">
	    		<ul>
	    			<li><a href="../index.php">Accueil</a></li>
	    			<li><a href="inscription.php">Inscription</a></li>
	    			<li><a href="contact.php">Contact</a></li>
	    			<li><a href="administration.php" class="active">Administration</a></li>
	    		</ul>
	    	</div>
	    	<div id="jambes">
	    		<img src="../img/jambes.png">
	    	</div>
    	</div>

      <?php

        if(isset($_SESSION['login']) == false && isset($_SESSION['password']) == false || $valide == false) {

      ?>

      <form id="login" method="post" action="administration.php">
              <fieldset id="global">
                <legend id="legend_sup">Connexion</legend>
                <table id="tableau">
                  <tr>
                    <td id="col1"><label for="login">Login :</label></td>
                    <td id="col2"><input type="text" id="login" name="login" placeholder="Login" maxvalue="30" required /></td>
                  </tr>
                  <tr>
                    <td id="col1"><label for="password">Password :</label></td>
                    <td id="col2"><input type="password" id="password" name="password" placeholder="Password" maxvalue="30" required /></td>
                  </tr>
                </table>
                <div id="boutton_ok">
                  <input id="ok" type="submit" value="Connexion">
                </div>
              </fieldset>
          </form>

      <?php

        }
        else if($valide == true){

      ?>

    	<div id="corps">
        <form id="contact" method="post" action="admin.php">
                <fieldset id="global">
                    <legend id="legend_sup">Gestion des inscriptions</legend>
                    <fieldset id="fieldset_inf">
                      <legend id="legend_inf">Afficher les inscriptions en attente</legend>
                      <input id="submit" type="submit" value="Valider">
                    </fieldset>
        </form>
        <form id="equipe" method="post" action="equipe.php">
            <fieldset id="fieldset_inf">
              <legend id="legend_inf">Afficher équipe</legend>
              <div id="gauche">
                <label for="categorie">Choix de la catégorie :</label>
                <select name="categories">
                  <option>- Choix de la catégorie -</option>
                  <option value="6">U7</option>
                  <option value="7">U8</option>
                  <option value="8">U9</option>
                  <option value="9">U10</option>
                  <option value="10">U11</option>
                  <option value="11">U12</option>
                  <option value="12">U13</option>
                  <option value="13">U14</option>
                  <option value="14">U15</option>
                  <option value="15">U16</option>
                  <option value="16">U17</option>
                  <option value="17">U18</option>
                  <option value="18">U19</option>
                  <option value="seniors">Seniors</option>
                  <option value="veterans">Vétérans</option>
                </select>
              </div>
              <div id="droite">
                  <label for="sexe">Sexe :</label>
                <select name="sexe">
                  <option>- Sexe -</option>
                  <option value="homme">Homme</option>
                  <option value="femme">Femme</option>
                </select>
              </div>
              <input id="equipe" type="submit" value="Valider">
            </fieldset>
        </fieldset>
            </form>

    	</div>

      <?php

        }

      ?>

    </body>
</html>
