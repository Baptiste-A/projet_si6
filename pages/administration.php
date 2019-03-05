<!DOCTYPE html>
<html>
<?php
    session_start();
?>
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

    	<div id="corps">
        <form id="contact" method="post" action="admin.php">
                <fieldset id="global">
                    <legend id="legend_sup">Gestion des inscriptions</legend>
                    <fieldset id="fieldset_inf">
                      <legend id="legend_inf">Afficher les inscriptions en attente</legend>
                      <input id="submit" type="submit" value="Valider">
                    </fieldset>
                    <fieldset id="fieldset_inf">
                      <legend id="legend_inf">Afficher équipe</legend>
                      <div id="gauche">
                        <label for="categorie">Choix de la catégorie :</label>
                        <select>
                          <option>- Choix de la catégorie -</option>
                          <option>U7</option>
                          <option>U8</option>
                          <option>U9</option>
                          <option>U10</option>
                          <option>U11</option>
                          <option>U12</option>
                          <option>U13</option>
                          <option>U14</option>
                          <option>U15</option>
                          <option>U16</option>
                          <option>U17</option>
                          <option>U18</option>
                          <option>U19</option>
                          <option>Seniors</option>
                          <option>Vétérans</option>
                        </select>
                      </div>
                      <div id="droite">
                          <label for="sexe">Sexe :</label>
                        <select>
                          <option>- Sexe -</option>
                          <option>Homme</option>
                          <option>Femme</option>
                        </select>
                      </div>
                    </fieldset>
                </fieldset>
            </form>

    	</div>
    </body>
</html>
