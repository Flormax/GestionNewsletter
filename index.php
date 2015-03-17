<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Connexion</title> 
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<?php 
		include 'functions.php';
		session_start();
	?>
	<body>
		<div id="blocantiscroll">
			<img src="img/logo.png" id="logodroit"/><img src="img/logo.png" id="logogauche"/>
			<div id="ban">Gestionnaire de newsletters de la M2L</div>
		</div>
		<div id="log">
			<form method="post" action="login.php">
				CONNEXION:
				<p>Login:
				<input type="text" name="log" /></p>
				<p>Mot de passe:
				<input type="password" name="pwd" /></p>
				<p><?php if(isset($_GET['ERROR'])) echo 'Erreur d\'identifiants'; ?></p>
				<p><?php if(isset($_GET['DROIT'])) echo 'Probleme de droit'; ?></p>
				<input type="submit" value="Se connecter" />
			</form>
		</div>
	</body>
</html>