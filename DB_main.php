<?php
	function  Connect()
	{
		try {
			$bdd = new PDO("mysql:host=mysql.m2l.local;dbname=mflorile", 
							"mflorile", 
							"jnUW118b", 
							array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e) {
			die("Erreur : " . $e->getMessage());
		}
		return $bdd;
	}
?>