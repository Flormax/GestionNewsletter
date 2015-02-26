<?php
	include 'DB.php';
	include 'DB_abonné.php';
	
	function Select_CoAdmin($nom,$mdp)
	{
		$dbh = Connect();
		$sql="select idUs from UTILISATEUR where log=:nom and mdp=:mdp and admin=true";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':nom',$nom);
		$stmp->BindValue(':mdp',md5($mdp));
		
		if($stmp->execute()) return  ($stmp->fetch()!= null);
		
		else Select_CoUser($nom,$mdp);
	}
	
	function Select_CoUser($nom,$mdp)
	{
		$dbh = Connect();
		$sql="select idUs from UTILISATEUR where log=:nom and mdp=:mdp";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':nom',$nom);
		$stmp->BindValue(':mdp',md5($mdp));
			
		if($stmp->execute()) return  ($stmp->fetch()!= null);
		
		else return false;
	}
	
	function SelectAll(){
		$dbh = Connect();
		$sql="select idUs, log, email from UTILISATEUR";
		$query  =  $dbh->query($sql);
		echo('<table border=1 align="center">');
		while($data = $query->fetch())
    	{	
			echo('<tr>');
			echo('<td>'.$data["idUs"].'</td>');
			echo('<td>'.$data["log"].'</td>');
			echo('<td>'.$data["email"].'</td>');
			echo('<td><a href="infoUser.php?id='.$data["idUs"].'">DETAILS</a></td>');
			echo('</tr>');
        }
        echo('</table>');
	}
	
	function SelectOne($id){
		$dbh = connect();
		$sql = "select * from utilisateur where idUs=:id";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':id',$id);
			
		$stmp->execute();
	
		echo('<table border=1 align="center">');
		while($data = $stmp->fetch())
		{	
			echo('<form action="post">');
			echo('<tr>');
			echo('<td>Identifiant:</td>');
			echo('<td>'.$data["log"].'</td>');
			echo('</tr>');
			echo('<tr>');
			echo('<td>Email</td>');
			echo('<td>'.$data["email"].'</td>');
			echo('</tr>');
			echo('<td>Newsletter 1</td>');
			echo('<td><input type="checkbox" name="NL1"');
			if(TestAbo($id,1)) echo'checked>bla1</td>';
			else echo'>else1</td>';
			echo('</tr>');
			echo('<td>Newsletter 2</td>');
			echo('<td><input type="checkbox" name="NL1"');
			if(TestAbo($id,2)) echo'checked>bla2</td>';
			else echo'>else 2</td>';
			echo('</tr>');
		}
		echo('</table>');
	}

?>