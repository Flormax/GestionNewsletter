<?php
	include 'DB_main.php';

	function TestAbo($idUs, $idNl){
		$dbh = Connect();
		$sql="select * from abonné where idUs=:idUs and idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		
		if($stmp->execute()) return  ($stmp->fetch()!= null);
		
		else return false;
	}
	
	function SelectAllAbo($id){
		$dbh = Connect();
		$sql="select u.idUs, log, email from utilisateur u, abonné a where u.idUs=a.idUs and a.idNl=".$id;
		$query  =  $dbh->query($sql);
		return $query;
	}

	function Abonner($idUs, $idNl){
		$dbh = Connect();
		$sql="INSERT into abonné (idUs,idNl) 
			  VALUES (:idUs,:idNl)";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
	
	function Desabonner($idUs, $idNl){
		$dbh = Connect();
		$sql="DELETE
			  FROM abonné 
			  WHERE idUs=:idUs 
			  AND idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
?>
