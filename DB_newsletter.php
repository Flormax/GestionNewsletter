<?php
	include_once 'DB_main.php';
	
	function SelectAllNl(){
		$dbh = Connect();
		$sql="SELECT idNl, libel 
			  FROM newsletter";
		$query  =  $dbh->query($sql);
		return $query;
	}
	
	function SelectOneNl($id){
		$dbh = connect();
		$sql = "SELECT libel, descr, nom, prenom, (SELECT count(*) 
												   FROM abonné 
												   WHERE idNl=".$id.") as nb_abo 
				FROM redacteur r, newsletter n 
				WHERE r.idRed = n.idRed and n.idNl=".$id."";
		$query  =  $dbh->query($sql);
		return $query->fetch();
	}
?>
