<?php session_start(); ?>

<!DOCTYPE html>
<html>
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

<?php
$prenom=$_POST['prenom'];
$email=$_POST['mail'];
$objet=$_POST['objet'];
$message=$_POST['message'];

 require("../PHPMailer-master/src/PHPMailer.php");
 require("../PHPMailer-master/src/SMTP.php");
 require("../PHPMailer-master/src/Exception.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 // Envoi par smtp
 $mail->IsSMTP();
 // settings google
 // Il faut désactiver dans google
 // https://myaccount.google.com/lesssecureapps
 $mail->CharSet="UTF-8";
 $mail->Host = "smtp.gmail.com";
 $mail->SMTPDebug = 0;
 $mail->Port = 465 ; //465 or 587
 $mail->SMTPSecure = 'ssl';
 $mail->SMTPAuth = true;
 $mail->IsHTML(true);
 //Authentication
 $mail->Username = "amielbaptiste@gmail.com";
 $mail->Password = "25091999";
 // On définit l’envoyeur du mail
 // Ne fonctionne pas avec gmail, le mail définit dans Username sera utilisé.
 $mail->SetFrom($email, $prenom);
 // à la place on peut définir un destinataire pour la réponse au mail.
 $mail->AddReplyTo($email, $prenom);
 // Le mail
 $mail->AddAddress("amielbaptiste@gmail.com");
 $mail->Subject = $objet;
 $mail->Body = $message;
 // On envoie
 if(!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
   echo "<p id=\"envoye\">Message envoyé</p>";
 }
?>

  <a href="contact.php" id="retour">Retour</a>
</body>
