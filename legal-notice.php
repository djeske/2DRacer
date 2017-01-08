<?php
	$language = "en";
	$aktuelleSeiteDE = "de/impressum.php";
	$aktuelleSeiteEN = "legal-notice.php";
	include 'includes/config.php';
	$currentPage = 'impressum';	
	$title = $lang['title_impressum'];
	$description = $lang['desc_impressum'];
	include 'includes/structure-top.php';
	include 'includes/content-impressum.php';
	include 'includes/structure-bottom.php';
?>