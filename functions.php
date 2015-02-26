<?php
	include 'DB_utilisateur.php';
	
	function Connexion($log, $pwd){
		if(Select_CoAdmin($log,$pwd)){
			header('Location: accueil_Admin.php');
		}
		else if(Select_CoUser($log,$pwd)){
			header('Location: accueil_U.php');
		}
		else{
			echo'Erreur d\'identifiant';
		}
	}

	function Top_Admin(){
		echo '<div id="blocantiscroll">
			<img src="logo.png" id="logodroit"/><img src="logo.png" id="logogauche"/>
			<a href="accueil_A.php"><div id="ban">Gestionnaire de newsletters de la M2L</div></a>
			<div id="menu" class="clear">
				<div id="boutons">
					<a href="userlist_A.php">Liste des utilisateurs</a>
				</div>
				<div id="boutons">
					<a href="newlist_A.php">Liste des newsletters</a>
				</div>
				<div id="boutons">
					<a href="connexion.php">Deconnexion</a>
				</div>
			</div><br/><br/><br/><br/>	<hr>
		</div>';
	}
	
	function Top_User(){
		echo '<div id="blocantiscroll">
			<img src="logo.png" id="logodroit"/><img src="logo.png" id="logogauche"/>
			<a href="accueil_A.php"><div id="ban">Gestionnaire de newsletters de la M2L</div></a>
			<div id="menu" class="clear">
				<div id="boutons">
					<a href="userAbo_U.php">Mes abonnements</a>
				</div>
				<div id="boutons">
					<a href="connexion.php">Deconnexion</a>
				</div>
			</div><br/><br/><br/><br/>	<hr>
		</div>';
	}

?>