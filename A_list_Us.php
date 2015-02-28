<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Liste des utilisateurs</title> 
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php include 'functions.php'; Top_Admin();?>
		<div id="contenu"><h1>LISTE DES UTILISATEURS</h1>
		<?php 
			SelectAllUsers();
		?>
		</div>
		<?php Bot();?>
	</body>
</html>