<!DOCTYPE html>
<html>
    <head> 
		<title>Gestionnaire de newsletters - D�tails utilisateurs</title> 
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" /> 
	</head> 
	<body>
		<?php include 'functions.php'; Top_Admin();?>
		<BR/><hr>
		<div id="contenu">
			<?php
            if (isset($_GET["id"])) {
         				 SelectOne($_GET["id"]);
                        }
         	?>
		</div>
		<div id="bottom">Gestionnaire de newsletters de la maison des ligues de lorraine, tout droits reserves. Contact: webmaster@m2l.fr</div>
	</body>
</html>