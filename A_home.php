<!DOCTYPE html>
<html>
	<head>
		<title>Gestionnaire de newsletters - Accueil administrateur</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<?php 
		include 'functions.php';
		session_start();
		TestAdmin();
		Top_Admin();
		?>
		<div id="contenu">
			<h1>LA M2L RECRUTE 2 REDACTEURS</h1>
			<img src="img/ban accueil.png" />
			<?php 
			echo 'ADMIN='.$_SESSION['admin'];
			?>
			<p>La Maison des Ligues de Lorraine recherche 2 nouveaux redacteurs pour de nouveaux projets !</br>
			Vous avez une experience dans le journalisme et vous souhaitez participer a la vie de votre region?</br>
			Contacter nous a l'adresse florile.maxime@gmail.com pour envoyer votre candidature !</p>	
		</div>
		<?php Bot();?>
	</body>
</html>