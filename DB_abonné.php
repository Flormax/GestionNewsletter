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
		$sql="select u.idUs, log, email from utilisateur u, abonné a where u.idUs=a.idUs and a.idNl=:id";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':id',$id);
		$stmp->execute();
		echo('<h1>Liste des abonnes:</h1>');
		echo('<table border=1 align="center">');
		echo('<tr>');
		echo('<td></td>');
		echo('<td>IDENTIFIANT</td>');
		echo('<td>ADRESSE MAIL</td>');
		echo('</tr>');
		while($data = $stmp->fetch())
		{
			echo('<tr>');
			echo('<td>'.$data["idUs"].'</td>');
			echo('<td>'.$data["log"].'</td>');
			echo('<td>'.$data["email"].'</td>');
			echo('</tr>');
		}
		echo('</table>');
	}

	function Abonner($idUs, $idNl){
		$dbh = Connect();
		$sql="insert into abonné (idUs,idNl) values (:idUs,:idNl)";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
	
	function Desabonner($idUs, $idNl){
		$dbh = Connect();
		$sql="delete from abonné where idUs=:idUs and idNl=:idNl";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':idUs',$idUs);
		$stmp->BindValue(':idNl',$idNl);
		$stmp->execute();
	}
?>
