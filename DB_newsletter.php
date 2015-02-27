<?php
	function SelectAllNl(){
		$dbh = Connect();
		$sql="select idNl, libel from NEWSLETTER";
		$query  =  $dbh->query($sql);
		echo('<table border=1 align="center">');
		echo('<tr>');
		echo('<td></td>');
		echo('<td>Libelle</td>');
		echo('<td></td>');
		echo('</tr>');
		while($data = $query->fetch())
    	{	
			echo('<tr>');
			echo('<td>'.$data["idNl"].'</td>');
			echo('<td>'.$data["libel"].'</td>');
			echo('<td><a href="infoNews.php?id='.$data["idNl"].'">DETAILS</a></td>');
			echo('</tr>');
        }
        echo('</table>');
	}
	
	function SelectOneNl($id){
		$dbh = connect();
		$sql = "select libel, descr, nom, prenom, (select count(*) from abonné where idNl=:id) as nb_abo from redacteur r, newsletter n where r.idRed = n.idRed and idNl=:id";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':id',"1");
			
		$stmp->execute();
		echo('<ul>');
		while($data = $stmp->fetch())
		{	
			echo'TEST';
			echo('<li>Libelle  '.$data["libel"].'</li>');
			echo('<li>Description:  '.$data["descr"].'</li>');
			echo('<li>Redacteur:  '.$data["nom"].' '.$data["prenom"]);
			echo('<li>Nombre d\'abonnés:  '.$data["nb_abo"]);
		}
		echo'</ul>';
	}
?>
