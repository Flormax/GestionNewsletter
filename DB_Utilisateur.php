<?php
	include 'DB_abonn�.php';
	
	function Select_log($nom, $mdp) {
		$dbh = Connect();
		
		$sql = "SELECT idUs, admin
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
	
	function SelectAllUsers($idNl=null){
		$dbh = Connect();
		
		if($idNl) {
			$sql = "SELECT u.idUs, log, email
					FROM utilisateur u, abonn� a
					WHERE idNl=".$idNl."
					AND u.idUs=a.idUs";
		}		  
		else {
			$sql="SELECT idUs, log, email 
				  FROM utilisateur";
		}
		
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