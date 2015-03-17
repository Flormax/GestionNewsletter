<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Liste des newsletters</title> 
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php 
		include 'functions.php'; 
		session_start();
		TestAdmin();
		Top_Admin();
		?>
		<div id="contenu"><h1>LISTE DES NEWSLETTERS</h1><BR/><BR/>
			<table><tr><td></td><td>Libelle</td><td></td></tr>
			<?php $query = SelectAllNl();
			while($data = $query->fetch()) 
			{?>
				<tr>
				<td><?php echo $data["idNl"]?></td>
				<td><?php echo $data["libel"]?></td>
				<td><a href="A_info_Nl.php?id=<?php echo $data["idNl"]?>">DETAILS</a></td></tr>
			<?php 
			} ?>
			</table>
		</div>
		<?php Bot();?>
	</body>
</html>