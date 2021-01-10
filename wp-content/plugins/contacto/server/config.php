<?php
	/* database */
	$server		= "localhost";
	$dbase 		= "digevo";
	$user		= "digevo_user";
	$password	= "787afc0ZALu5BQ6r";
	try {
		$db = new PDO("mysql:host=${server};dbname=${dbase};charset=utf8", $user, $password);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>