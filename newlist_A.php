<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Liste des newsletters</title> 
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php include 'functions.php'; Top_Admin();?>
		<div id="contenu"><h1>LISTE DES NEWSLETTERS</h1><BR/><BR/>
			<?php 
				SelectAllNl();
			?>
		</div>
		<div id="bottom">Gestionnaire de newsletters de la maison des ligues de lorraine, tout droits reserves. Contact: webmaster@m2l.fr</div>
	</body>
</html>