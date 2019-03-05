<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/inscription.css">
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
	    			<li><a href="inscription.php" class="active">Inscription</a></li>
	    			<li><a href="contact.php">Contact</a></li>
	    			<li><a href="administration.php">Administration</a></li>
	    		</ul>
	    	</div>
	    	<div id="jambes">
	    		<img src="../img/jambes.png">
	    	</div>
    	</div>

    	<div id="corps">
        <form id="inscription" method="post" action="traitement.php">
      		<fieldset id="fieldset_sup">
            <legend id="legend_sup">Inscription au club</legend>
            <fieldset>
              <legend id="legend_inf">Informations personnelles</legend>
              <table>
                <tr>
                  <td id="col1"><label for="sexe">Sexe :</label></td>
                  <td id="col2">
                    <select name="sexe">
                      <optgroup label="- Sexe -" />
                      <option value="h">Homme</option>
                      <option value="f">Femme</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td id="col1"><label for="nom">Nom :</label></td>
                  <td id="col2"><input type="text" id="nom" name="nom" placeholder="Saisir un nom" maxvalue="30" required /></td>
                </tr>
                <tr>
                  <td id="col1"><label for="prenom">Prénom :</label></td>
                  <td id="col2"><input type="text" id="prenom" name="prenom" placeholder="Saisir un prénom" maxvalue="30" required /></td>
                </tr>
              </table>
            </fieldset>
            <fieldset>
              <legend id="legend_inf">Adresse</legend>
              <table>
                <tr>
                  <td id="col1"><label for="rue">Rue :</label></td>
                  <td id="col2"><input type="text" id="rue" name="rue" placeholder="Saisir votre adresse" maxvalue="50" required /></td>
                </tr>
                <tr>
                  <td id="col1"><label for="cp">Code postal :</label></td>
                  <td id="col2"><input type="text" id="cp" name="cp" placeholder="87000" maxvalue="5" pattern="[0-9]{5}" required /></td>
                </tr>
                <tr>
                  <td id="col1"><label for="ville">Ville :</label></td>
                  <td id="col2"><input type="text" id="ville" name="ville" placeholder="Ville" maxvalue="30" required /></td>
                </tr>
              </table>
            </fieldset>
            <fieldset>
              <legend id="legend_inf">Coordonnées</legend>
              <table>
                <tr>
                  <td id="col1"><label for="mail">E-mail :</label></td>
                  <td id="col2"><input type="email" id="mail" name="mail" placeholder="Saisir votre e-mail" maxvalue="30" required /></td>
                </tr>
                <tr>
                  <td id="col1"><label for="tel">Telephone :</label></td>
                  <td id="col2"><input type="tel" id="tel" name="tel" placeholder="0123456789" maxvalue="10" required /></td>
                </tr>
                <tr>
                  <td id="col1"><label for="naissance">Date de naissance :</label></td>
                  <td id="col2"><input type="date" id="naissance" name="naissance" required /></td>
                </tr>
              </table>
            </fieldset>
          </fieldset>
          <div id="bouttons">
            <input id="reset" type="reset" value="Reset">
            <input id="submit" type="submit" value="Valider">
          </div>
        </form>
        <p id="contact_btn"><a href="contact.php">NOUS CONTACTER</a></p>

    	</div>
    </body>
</html>
