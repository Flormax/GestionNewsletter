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
			<form method = "post" action = "A_list_Us.php">
				<label for="list">Filtrer par abonnement</label>
				<select name="filter" size="1" id = "list">
					<Option value = "1">Newsletter 1
					<Option value = "2">Newsletter 2
					<Option value = "3">Newsletter 3
					<Option value = "4">Newsletter 4
					<Option value = "5">Newsletter 5
					<Option value = "6">Newsletter 6
				</select>
				<input type= "submit" value = "FILTRER" /> 
			</form>
			<table>
			<tr><td></td><td>IDENTIFIANT</td><td>ADRESSE MAIL</td><td></td></tr>
			<?php 
			if(isset($_POST['filter'])){
				$query = SelectAllUsers($_POST['filter']);
			}
			else {
				$query = SelectAllUsers();
			}
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