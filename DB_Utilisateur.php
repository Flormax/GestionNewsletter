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
	
	function SelectAllUsers(){
		$dbh = Connect();
		$sql="select idUs, log, email from UTILISATEUR";
		$query  =  $dbh->query($sql);
		echo('<table border=1 align="center">');
		echo('<tr>');
		echo('<td></td>');
		echo('<td>IDENTIFIANT</td>');
		echo('<td>ADRESSE MAIL</td>');
		echo('<td></td>');
		echo('</tr>');
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
	
	function SelectOneUser($id){
		$dbh = connect();
		$sql = "select * from utilisateur where idUs=:id";
		$stmp=$dbh->prepare($sql);
		$stmp->BindValue(':id',$id);
			
		$stmp->execute();
		echo('<ul>');
		echo('<form action="post">');
		while($data = $stmp->fetch())
		{	
			echo('<li>Identifiant:  '.$data["log"].'</li>');
			echo('<li>Email:  '.$data["email"].'</li>');
			echo('<li>Newsletter 1:  ');
			echo('<input type="checkbox" name="NL1"');
			if(TestAbo($id,1)) 
				echo'checked></li>';
			else echo'></li>';
			echo('<li>Newsletter 2:  ');
			echo('<input type="checkbox" name="NL1"');
			if(TestAbo($id,2)) 
				echo'checked></li>';
			else echo'></li>';
		}
		echo'<input type="submit" value="modifier"></form>';
		echo'</ul>';
	}

?>