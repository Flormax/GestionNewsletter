<?php
	function TestAbo($idUs, $idNl){
		$dbh = Connect();
		$sql="select * from abonné where idUs=:idUs and idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		
		if($stmp->execute()) return  ($stmp->fetch()!= null);
		
		else return false;
	}


?>
