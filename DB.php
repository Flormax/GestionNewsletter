<?php
	function  Connect()
	{
		$user = 'root';
		$pass = '';
		$hote = 'localhost';
		$port = '8080';
		$base = 'newsletter';
		$dsn="mysql:$hote;port=$port;dbname=$base";
	
		try
		{
			$dbh = new PDO($dsn, $user, $pass);
	
		}
		catch (PDOException $e)
		{
			die("Erreur! :" . $e->getMessage());
		}
		return $dbh;
	}
?>	