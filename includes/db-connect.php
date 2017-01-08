<?php
	$servername = "ec2-54-93-97-126.eu-central-1.compute.amazonaws.com";
	$benutzername = "danny";
	$passwort = "danny";
	$datenbankname = "2DRacer";
	$verbindung = mysql_connect($servername, $benutzername, $passwort)
	or die ($lang['error_server']);
	mysql_select_db($datenbankname)
	or die ($lang['error_db']);
?>