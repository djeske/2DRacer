<?php
	$language = "en";
	$aktuelleSeiteDE = "de/datenschutz.php";
	$aktuelleSeiteEN = "privacy-policy.php";
	include 'includes/config.php';
	$currentPage = 'datenschutz';
	$title = $lang['title_datenschutz'];
	$description = $lang['desc_datenschutz'];
	include 'includes/structure-top.php';
	include 'includes/content-datenschutz.php';
	include 'includes/structure-bottom.php';
?>