<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Mes abonnements</title> 
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php 
		include 'functions.php'; 
		session_start();
		TestLog();
		Top_User();
		?>
		<div id="contenu"><h1>MON PROFIL</h1>
		<?php 
		$data = SelectOneUser($_SESSION["id"]);?>	
		<form method="post" action="update_Us.php?id=<?php echo $data["idUs"] ?>">
			<ul><li>Identifiant:  <?php echo $data['log'] ?></li>
			<li>Email:  <?php echo $data["email"] ?></li> 
			<?php 
			for ($i = 1; $i <= 6; $i++) 
			{?>
				<li>Newsletter <?php echo $i?>:
				<?php 
					if(TestAbo($_SESSION["id"],$i)) echo'<input type="checkbox" name="NL'.$i.'" checked></li>';
					else echo'<input type="checkbox" name="NL'.$i.'" ></li>'; 
				?>
			<?php 
			}?>
			<input type="submit" value="modifier"></form></ul>
		</div>
		<?php Bot();?>
	</body>
</html>