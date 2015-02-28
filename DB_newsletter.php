<?php
	include_once 'DB_main.php';
	
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
			echo('<td><a href="A_info_Nl.php?id='.$data["idNl"].'">DETAILS</a></td>');
			echo('</tr>');
        }
        echo('</table>');
	}
	
	function SelectOneNl($id){
		$dbh = connect();
		$sql = "select libel, descr, nom, prenom, (select count(*) from abonné where idNl=:id) as nb_abo from redacteur r, newsletter n where r.idRed = n.idRed and n.idNl=:id";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':id',$id);
			
		$stmp->execute();
		echo('<ul>');
		$data = $stmp->fetch();
		echo('<li>Libelle:  '.$data["libel"].'</li>');
		echo('<li>Description:  '.$data["descr"].'</li>');
		echo('<li>Redacteur:  '.$data["nom"].' '.$data["prenom"]);
		echo('<li>Nombre d\'abonnes:  '.$data["nb_abo"]);
		echo'</ul>';
		
		
	}
?>
