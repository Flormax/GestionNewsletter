<?php
	include 'DB_Utilisateur.php';
	include 'DB_newsletter.php';
	
	function Connexion($log, $pwd){
		if(Select_CoAdmin($log,$pwd)){
			header('Location: A_home.php');
		}
		else if(Select_CoUser($log,$pwd)){
			header('Location: U_home.php');
		}
		else{
			echo'Erreur d\'identifiant';
		}
	}

	function Top_Admin(){
		echo '<div id="blocantiscroll">
			<img src="img/logo.png" id="logodroit"/><img src="img/logo.png" id="logogauche"/>
			<a href="A_home.php"><div id="ban">Gestionnaire de newsletters de la M2L</div></a>
			<div id="menu" class="clear">
				<div id="boutons">
					<a href="A_list_Us.php">Liste des utilisateurs</a>
				</div>
				<div id="boutons">
					<a href="A_list_Nl.php">Liste des newsletters</a>
				</div>
				<div id="boutons">
					<a href="connexion.php">Deconnexion</a>
				</div>
			</div><br/><br/><br/><br/>	<hr>
		</div>';
	}
	
	function Top_User(){
		echo '<div id="blocantiscroll">
			<img src="img/logo.png" id="logodroit"/><img src="img/logo.png" id="logogauche"/>
			<a href="U_home.php"><div id="ban">Gestionnaire de newsletters de la M2L</div></a>
			<div id="menu" class="clear">
				<div id="boutons">
					<a href="U_profil.php">Mes abonnements</a>
				</div>
				<div id="boutons">
					<a href="connexion.php">Deconnexion</a>
				</div>
			</div><br/><br/><br/><br/>	<hr>
		</div>';
	}

	function Bot(){
		echo'<div id="bottom">Gestionnaire de newsletters de la maison des ligues de
		lorraine, tout droits reserves. Contact: webmaster@m2l.fr</div>';
	}

	?>