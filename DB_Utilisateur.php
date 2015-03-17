<?php
	include 'DB_abonné.php';
	
	function Select_log($nom, $mdp) {
		$dbh = Connect();
		
		$sql = "SELECT admin
			    FROM utilisateur
			    WHERE log = :nom
			    AND mdp = :mdp";
	
		$query  =  $dbh->prepare($sql);
		
		$query->execute(array(
				"nom" => $nom,
				"mdp" => md5($mdp)
		));
	
		if ($query) {
			return $query->fetch(PDO::FETCH_OBJ);
		}
		else {
			return false;
		}
	}
	
	function SelectAllUsers(){
		$dbh = Connect();
		$sql="select idUs, log, email from UTILISATEUR";
		$query  =  $dbh->query($sql);
		return $query;
	}
	
	function SelectOneUser($id){
		$dbh = Connect();
		$sql = "select * from utilisateur where idUs=".$id;
		$query  =  $dbh->query($sql);
		return $query->fetch();
	}

?>