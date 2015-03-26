<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Details utilisateurs</title> 
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
		<div id="contenu"><h1>DETAILS UTILISATEUR</h1>
			<?php if (isset($_GET["id"])) {
				$data = SelectOneUser($_GET["id"]);?>	
				<form method="post" action="update_Us.php?id=<?php echo $data["idUs"] ?>">
				<ul><li>Identifiant:  <?php echo $data['log'] ?></li>
				<li>Email:  <?php echo $data["email"] ?></li> 
				<?php 
				for ($i = 1; $i <= 6; $i++) 
				{?>
					<li>Newsletter <?php echo $i?>:
					<?php 
						if(TestAbo($_GET["id"],$i)) echo'<input type="checkbox" name="NL'.$i.'" checked></li>';
						else echo'<input type="checkbox" name="NL'.$i.'" ></li>'; 
					?>
				<?php 
				}?>
				<input type="submit" value="modifier"></form></ul>
			<?php } ?>
		</div>
		<?php Bot();?>
	</body>
</html>