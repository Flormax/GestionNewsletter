<?php
	include_once 'DB_main.php';
	
	function SelectAllNl(){
		$dbh = Connect();
		$sql="select idNl, libel from NEWSLETTER";
		$query  =  $dbh->query($sql);
		return $query;
	}
	
	function SelectOneNl($id){
		$dbh = connect();
		$sql = "select libel, descr, nom, prenom, (select count(*) from abonné where idNl=".$id.") as nb_abo from redacteur r, newsletter n where r.idRed = n.idRed and n.idNl=".$id."";
		$query  =  $dbh->query($sql);
		return $query->fetch();
	}
?>
