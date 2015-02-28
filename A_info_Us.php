<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - Details utilisateurs</title> 
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php include 'functions.php'; Top_Admin();?>
		<div id="contenu"><h1>DETAILS UTILISATEUR</h1>
			<?php
            if (isset($_GET["id"])) {
         				 SelectOneUser($_GET["id"]);
                        }
         	?>
		</div>
		<?php Bot();?>
	</body>
</html>