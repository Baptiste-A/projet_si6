<!DOCTYPE html>
<html>
<?php
    session_start();
?>
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
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
	    			<li><a href="contact.php" class="active">Contact</a></li>
	    			<li><a href="administration.php">Administration</a></li>
	    		</ul>
	    	</div>
	    	<div id="jambes">
	    		<img src="../img/jambes.png">
	    	</div>
    	</div>

    	<div id="corps">
    		<form id="contact" method="post" action="traitement_formulaire.php">
                <fieldset>
                    <legend>Ecrivez-nous</legend>
                    <table>
                      <tr>
                        <td id="col1"><label for="objet">Objet :</label></td>
                        <td id="col2"><input type="text" id="objet" name="objet" /></td>
                      </tr>
                      <tr>
                        <td id="col1"><label for="message">Message :</label></td>
                        <td id="col2"><textarea id="message" name="message" cols="30" rows="8"></textarea></td>
                      </tr>
                    </table>
                </fieldset>

                <div id="bouttons">
                  <input id="reset" type="reset" value="Reset">
                  <input id="submit" type="submit" value="Valider">
                </div>
            </form>

    	</div>
    </body>
</html>
