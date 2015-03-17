<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Liste des utilisateurs</title> 
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
		<div id="contenu"><h1>LISTE DES UTILISATEURS</h1>
			<table>
			<tr><td></td><td>IDENTIFIANT</td><td>ADRESSE MAIL</td><td></td></tr>
			<?php $query = SelectAllUsers();
			while($data=$query->fetch())
	    	{?>	
				<tr><td><?php echo $data["idUs"]?></td>
				<td><?php echo $data["log"]?></td>
				<td><?php echo $data["email"]?></td>
				<td><a href="A_info_Us.php?id=<?php echo $data['idUs']?>">DETAILS</a></td></tr>
	        <?php 
	    	} ?>
			</table>
		</div>
		<?php Bot();?>
	</body>
</html>