<?php
	include_once 'DB_main.php';

	function TestAbo($idUs, $idNl){
		$dbh = Connect();
		$sql="SELECT * 
			  FROM abonn� 
			  WHERE idUs=:idUs and idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		if($stmp->execute()) return  ($stmp->fetch()!= null);
		else return false;
	}
	
	function SelectAllAbo($id){
		$dbh = Connect();
		$sql="SELECT u.idUs, log, email 
			  FROM utilisateur u, abonn� a 
			  WHERE u.idUs=a.idUs and a.idNl=".$id;
		$query  =  $dbh->query($sql);
		return $query;
	}

	function Abonner($idUs, $idNl){
		$dbh = Connect();
		$sql="INSERT into abonn� (idUs,idNl) 
			  VALUES (:idUs,:idNl)";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
	
	function Desabonner($idUs, $idNl){
		$dbh = Connect();
		$sql="DELETE
			  FROM abonn� 
			  WHERE idUs=:idUs 
			  AND idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
?>
